<?php

	// your functions may be here
	if(isset($_SERVER["HTTP_REFERER"])){
		$_SESSION["origURL"] = $_SERVER["HTTP_REFERER"];
	} else {
		$_SESSION["origURL"] = '';
	}
	$inform = ['ip' => $_SERVER['REMOTE_ADDR'],
			   'dt' => date("Y-d-m H:i:s"),
			   'url' => 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'],
			   'ref' => $_SESSION["origURL"],
			   'name-date' => date("Y-m-d"),
			   ];
	/* start --- black box */
	function getArticles() : array{
		return json_decode(file_get_contents('db/articles.json'), true);
	}

	function addArticle(string $title, string $content) : bool{
		$articles = getArticles();

		$lastId = end($articles)['id'];
		$id = $lastId + 1;

		$articles[$id] = [
			'id' => $id,
			'title' => $title,
			'content' => $content
		];

		saveArticles($articles);
		return true;
	}

	function removeArticle(int $id) : bool{
		$articles = getArticles();

		if(isset($articles[$id])){
			unset($articles[$id]);
			saveArticles($articles);
			return true;
		}
		
		return false;
	}

	function saveArticles(array $articles) : bool{
		file_put_contents('db/articles.json', json_encode($articles));
		return true;
	}

	function editArticle(string $id, string $title, string $content) : bool{
		$articles = getArticles();
		$articles[$id] = [
			'id' => $id,
			'title' => $title,
			'content' => $content
		];
		saveArticles($articles);
		return true;
	}

	function saveLogs(array $inform) : bool {
		$file_name = 'db/'.$inform['name-date'].'.txt';
		$str = $inform['ip'].';'.$inform['dt'].';'.$inform['url'].';'.$inform['ref']."\n";
		$putfile = fopen($file_name, 'a');
		fwrite($putfile, $str);
        fclose($putfile);
		return true;
	}
	/* end --- black box */
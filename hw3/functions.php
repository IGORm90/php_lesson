<?php

	function dbInstance() :PDO{
		static $db;
		if($db === null){
			$db = new PDO('mysql:host=localhost;dbname=hw3', 'root', '', [
				PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
			]);
			$db->exec('SET NAMES UTF8');
		}    
		
		return $db;
	}


	function dbQuery(string $sql,array $params = []) :PDOStatement{
        $db = dbInstance();
        $query = $db->prepare($sql);
        $query->execute($params);
        dbCheckError($query); 
        return $query;
	}
	

	function dbCheckError(PDOStatement $query) :bool{
        $errInfo = $query->errorInfo();

        if($errInfo[0] !== PDO::ERR_NONE){
            echo $errInfo[2];
            exit();
        }

        return true;
	}

	
	function messagesAll() :array{
        $sql = "SELECT * FROM articles ORDER bY dt_add DESC";
        $query = dbQuery($sql);
        return $query->fetchAll();
	}

	
	function messagesAdd(array $fields) :bool{
        $sql = "INSERT articles (title, content) VALUES (:title, :content)";
        dbQuery($sql, $fields);
        return true;
	}
	  

	function getOneArticle(string $id) :array{
		$sql = "SELECT * FROM articles WHERE id_art=$id";
		$query = dbQuery($sql);
		return $query->fetch();
	}


	function delArticle(string $id) :bool{
		$sql = "DELETE FROM articles WHERE id_art=$id";
		dbQuery($sql);
		return true;
	}

	function checkUrl(string $url) :bool{
		return !!preg_match('/[0-9]/', $url);
	}

	function lastId() :string{
		$db = dbInstance();
		return $db->lastInsertId();
	}

	function editArticle($fields, $id) :bool{
		$sql = "UPDATE articles SET title=:title, content=:content WHERE id_art=$id";
		dbQuery($sql, $fields);		
		return true;
	}

?>
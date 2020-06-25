<?php

	include_once('functions.php');		

	$id = ($_GET['id'] ?? '');
	if(checkUrl($id)){
		$article = getOneArticle($id);
		//var_dump($article);
	}
	
	//var_dump($id);
?>
<div class="content">
		<div class="article">
			<h1><?=$article['title']?></h1>
			<em><?=$article['dt_add']?></em>
			<div><?=$article['content']?></div>
			<hr>
			<a href="delete.php?id=<?=$id?>">Remove</a>
		</div>
</div>
<hr>
<a href="edit.php?id=<?=$id?>">Edit</a>
<hr>
<a href="index.php">Move to main page</a>
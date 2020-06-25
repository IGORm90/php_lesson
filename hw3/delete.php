<?php

	include_once('functions.php');		

	$id = ($_GET['id'] ?? '');
	if(checkUrl($id) && delArticle($id)){
		header('Location: index.php');
	}
?>

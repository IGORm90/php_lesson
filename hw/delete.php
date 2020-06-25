<?php

	include_once('functions.php');		

	/*
		your code here
		get id from url
		check id
		call removeArticle
	*/
	$isSet = false;
	$id = $_GET['id'];
	if(removeArticle($id)){
		$isSet = true;
	}
	


?>
<div>
	<? if($isSet): ?>
		<p>article has been removed</p>
	<? else: ?>
		<p>Error!</p>
	<? endif; ?>
<hr>
<a href="index.php">Move to main page</a>
</div>
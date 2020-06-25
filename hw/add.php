<?php

	include_once('functions.php');

	/*
		your code here
		check request method
		read POST-data
		validate data
		call addArticle
	*/

	
	
	$isSend = false;
	$err = '';
	if($_SERVER['REQUEST_METHOD'] === 'POST'){
		$title = $_POST['title'];
		$content = $_POST['content'];
		
		if($title === '' || $content === ''){
			$err = 'Заполните все поля!';
		}
		else if(mb_strlen($title, 'UTF8') < 5){
			$err = 'Короткое название.';
		} else if(mb_strlen($content, 'UTF8') < 10){
			$err = 'Короткое содержание.';
		}
		else{
			addArticle($title, $content);
			$isSend = true;
		}
	}
	else{
		$name = '';
		$phone = '';
	}


?>
<div class="form">
<? if($isSend): ?>
		<p>Your app is done!</p>
	<? else: ?>
	<form method="post">
		Title:<br>
		<input type="text" name="title"><br>
		Content:<br>
		<input type="text" name="content"><br>
		<button>Send</button>
		<p><?=$err?></p>
	</form>
	<? endif; ?>
</div>
<hr>
<a href="index.php">Move to main page</a>
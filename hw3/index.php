<?php

	include_once('functions.php');
	
	$messages = messagesAll();

?>
<h1>Blog</h1>
<a href="add.php">Add article</a>
<hr>
<div class="articles">

	<? foreach($messages as $message): ?>
		<div>
        <strong><?=$message['title']?></strong>
        <em><?=$message['dt_add']?></em>
		<div><?=$message['content']?></div>
		<a href="article.php?id=<?=$message['id_art']?>">READ
	</a>
        <hr>
    </div>
	<? endforeach; ?>
</div>
	
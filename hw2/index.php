<?php

	include_once('functions.php');
	$articles = getArticles();

?>
<a href="add.php">Add article</a>
<hr>
<a href="logs.php">Logs</a>
<hr>
<div class="articles">
	<? foreach($articles as $id => $article): ?>
		<div class="article">
			<h2><?=$article['title']?></h2>
			<a href="article.php?id=<?=$id?>">Read more</a>
		</div>
	<? endforeach; ?>
	<? if(saveLogs($inform)): ?>
		<p>лог сохранен</p>
	<? endif; ?>
</div>
	
<?php

include_once('functions.php');

$articles = getAticles();
$id = $_GET['id'];


?>
<h1><?=$articles[$id]['title']?></h1>
<p><?=$articles[$id]['content']?></p>
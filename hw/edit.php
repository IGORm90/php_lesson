<?php
    include_once('functions.php');
    
    $articles = getArticles();

    $isSend = false;
	$err = '';

    if($_SERVER['REQUEST_METHOD'] === 'GET'){
        $id = $_GET['id']; 
        $title = $articles[$id]['title'];
        $content = $articles[$id]['content'];
    } else if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $id = $_GET['id']; 
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
            editArticle($id, $title, $content);
            $isSend = true;
        }
    }

    


?>

<div class="form">
<? if($isSend): ?>
		<p>data successfully changed!</p>
	<? else: ?>
	<form method="post">
		Title:<br>
		<input type="text" name="title" value="<?=$title?>"><br>
		Content:<br>
		<input type="text" name="content" value="<?=$content?>"><br>
		<button>Send</button>
		<p><?=$err?></p>
	</form>
	<? endif; ?>
</div>
<hr>
<a href="index.php">Move to main page</a>

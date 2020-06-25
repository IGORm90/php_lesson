<?php

	include_once('functions.php');


	$err = '';
    $fields =['title' => '', 'content' => ''];

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $fields['title'] = trim($_POST['title']);
        $fields['content'] = trim($_POST['content']);

        if($fields['title'] === '' || $fields['content'] === ''){
            $err = 'Заполните поля';
        } else if(mb_strlen($fields['title'], 'UTF8') < 2){
            $err = 'название короткое';
        } else {
			messagesAdd($fields);
			$id = lastId();
            header("Location: article.php?id=$id");
            exit();
        }
    } 


?>
<div class="form">
    <form method="post">
        Title:<br>
        <input type="text" name="title" value="<?=$fields['title']?>"><br>
        Content:<br>
        <textarea name="content"><?=$fields['content']?></textarea><br>
        <button>Send</button>
		<p><?=$err?></p>
		<a href="index.php">Main page</a>
    </form>
</div>
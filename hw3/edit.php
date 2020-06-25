<?php
    include_once('functions.php');
    

    $err = '';   
    $id_art = ($_GET['id'] ?? '');
	if(checkUrl($id_art)){
		$article = getOneArticle($id_art);
    }

    $fields = ['title' => '', 'content' => ''];

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $id = (int)($_GET['id'] ?? '');
        $fields['title'] = $_POST['title']; 
        $fields['content'] = $_POST['content']; 
        
        if($fields['title'] === '' || $fields['content'] === ''){
            $err = 'Заполните все поля!';
        }
        else if(mb_strlen($fields['title'], 'UTF8') < 3){
            $err = 'Короткое название.';
        } else if(mb_strlen($fields['content'], 'UTF8') < 5){
            $err = 'Короткое содержание.';
        }
        else{
            editArticle($fields, $id);
            header("Location: index.php");
            exit();
        }
    }

    


?>

<div class="form">
	<form method="post">
		Title:<br>
		<input type="text" name="title" value="<?=$article['title']?>"><br>
		Content:<br>
		<input type="text" name="content" value="<?=$article['content']?>"><br>
		<button>Send</button>
		<p><?=$err?></p>
	</form>
</div>
<hr>
<a href="index.php">Move to main page</a>

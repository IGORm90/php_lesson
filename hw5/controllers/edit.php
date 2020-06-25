<?php
    include_once('model/functions.php');
    include_once('core/arr.php');

    if($user === null){
        header('Location: ' . BASE_URL . 'auth/login');
        exit();
    }
 
    $strId = URL_PARAMS['id'];
    //var_dump($strId);
    $id = (int)$strId;

	if(checkUrl($id)){
        $article = messagesOne($id);
    }

    //var_dump($article);

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $fields = extractFields($_POST, ['name', 'text']);
        $validateErrors = messagesValidateEdit($fields);
        
        if(empty($validateErrors)){
            editArticle($fields, $id);
            header('Location: ' . BASE_URL);
            exit();
        }  
    }   else {
        $fields =['name' => '', 'text' => ''];
        $validateErrors = [];
    }


    $pageTitle = 'EDIT';
        $pageContent = template('v_edit', [
            'article' => $article,
            'validateErrors' => $validateErrors,
        ])

?>


<?php

    if($user === null){
        header('Location: ' . BASE_URL . 'auth/login');
        exit();
    }

    
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $fields = extractFields($_POST, ['name', 'text', 'id_cat']);
        $validateErrors = messagesValidate($fields);
        
        if(empty($validateErrors)){
            messagesAdd($fields);
            $_SESSION['message.added'] = true;
            header('Location: ' . BASE_URL);
            exit();
        }  
    } else {
        $fields =['name' => '', 'text' => '', 'id_cat' => ''];
        $validateErrors = [];
        }
    
        $pageTitle = 'Add';
        $pageContent = template('v_add', [
            'fields' => $fields,
            'validateErrors' => $validateErrors,
        ])
?>

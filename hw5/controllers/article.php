<?php

    //include_once('model/functions.php');
    include_once('init.php');
    $strId = URL_PARAMS['id'];
    //var_dump($strId);
    $id = (int)$strId;


    if(checkUrl($id)){
		$message = messagesOne($id);
		//var_dump($article);
	}
    $hasMsg = $message !== false;

    if($hasMsg){
        $pageTitle = $message['name'];
        $pageContent = template('v_article', [
            'message' => $message,
            'user' => $user
        ]);
    } else {
        header('HTTP/1.1 404 Not Found');
        $pageContent = template('errors/v_404');
    }
?>

<?php
    include_once('model/functions.php');
    
    // $id = URL_PARAMS[1];
    // $messages = messagesbyCategory($id);
    

    $strId = URL_PARAMS['id'];
    //var_dump($strId);
    $id = (int)$strId;


    if(checkUrl($id)){
		$messages = messagesbyCategory($id);
		//var_dump($article);
	}

    $pageTitle = 'category';
    $pageContent = template('v_category', [
        'messages' => $messages,
    ])

    //include('view/v_category.php');
?>
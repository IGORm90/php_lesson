<?php
	include_once('model/functions.php');		
	include_once('init.php');

	if($user === null){
        header('Location: ' . BASE_URL . 'auth/login');
        exit();
    }
	
	$strId = URL_PARAMS['id'];

    $id = (int)$strId;


	if(delArticle($id)){
		header('Location: ' . BASE_URL);
	}

?>


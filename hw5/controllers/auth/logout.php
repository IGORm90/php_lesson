<?php

    if($user !== null){
        session_unset();
            if(isset($_COOKIE['token'])){
                unset($_COOKIE['token']);
                setcookie('token', '', time() -1, '/');
                
            }
            header('Location: ' . BASE_URL);
            exit();
                   
    }
?>  
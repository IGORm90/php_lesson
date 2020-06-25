<?php


if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $fields['login'] = trim($_POST['login']);
    $fields['password'] = trim($_POST['password']);
    $fields['name'] = trim($_POST['name']);
    $fields['email'] = trim($_POST['email']);
    $remember = isset($_POST['remember']);
    $authErr = [];

    if($fields['password'] !== '' && $fields['login'] !== '' && $fields['email'] !== '' && $fields['name'] !== ''){
        $fields['password'] = password_hash($fields['password'], PASSWORD_BCRYPT);
        
        if(createUser($fields)){
            $user = usersOne($fields['login']);
            if($user !== null){
                $token = substr(bin2hex(random_bytes(128)), 0, 128);
                sessionAdd($user['id_user'], $token);
                $_SESSION['token'] = $token;

                if($remember){
                    setcookie('token', $token, time() + 3600 * 24 * 30, BASE_URL);
                }
            }
            header('Location: ' . BASE_URL);
            exit();
        }
    }  else {
        $authErr = ['incorrect data'];
    }
} else {
    $fields =['login' => '', 'password' => '', 'email' => '', 'name' => ''];
    $authErr = [];
    }

    $pageTitle = 'Registr';
    $pageContent = template('auth/v_registr', ['authErr' => $authErr]);


?>
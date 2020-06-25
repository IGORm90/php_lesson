<?php

    $response = [
        'res' => false,
        'error' => ''
    ];

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $name = trim($_POST['name']);
        $phone = trim($_POST['phone']);

        if($name === '' || $phone === ''){
            $response['error'] = 'Заполните поля';
        } else if(mb_strlen($name, 'UTF8') < 2){
            $response['error'] = 'имя короткое';
        } else {
        $dt = date("Y-d-m H:i:s");
        $mainBody = "$dt\n$phone\n$name";
        mail('1@1.ru', 'new app', $mainBody);
        $response['res'] = true;
        }
    }

    echo json_encode($response);
?>

<?php

    $db = new PDO('mysql:host=localhost;dbname=php1simple', 'root', '');
    $db->exec('SET NAMES UTF8');
    
    
    $sql = "INSERT message (name, text) VALUES (:name, :text)";
    $query = $db->prepare($sql);

    $params = [
        'name' => 'oleg',
        'text' => 'tututu'
    ];
    
    $query->execute($params);

    // $name = 'admin';
    // $text = 'fuck!';
    // $query->bindParam(':name', $name);
    // $query->bindParam(':text', $text);

    // $sql = "INSERT message (name, text) VALUES ('igor', 'hello world!')";
    // $db->exec($sql);

?>
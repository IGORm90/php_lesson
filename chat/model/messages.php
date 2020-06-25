<?php

    include_once('core/db.php');

    function messagesAll() :array{
        $sql = "SELECT * FROM message ORDER bY dt_add DESC";
        $query = dbQuery($sql);
        return $query->fetchAll();
    }

    function messagesOne(int $id){
		$sql = "SELECT * FROM message WHERE id_message=$id";
		$query = dbQuery($sql);
		return $query->fetch();
	}

    function messagesAdd(array $fields) :bool{
        $sql = "INSERT message (name, text) VALUES (:name, :text)";
        dbQuery($sql, $fields);
        return true;
    }

    function messagesValidate(array &$fields) :array{
        $errors = [];
        if(mb_strlen($fields['name'], 'UTF8') < 2){
            $errors[] = 'имя короткое';
        } 
         if(mb_strlen($fields['text'], 'UTF8') < 10){
            $errors[] = 'сообщение короткое';
        }

        $fields['name'] = htmlspecialchars($fields['name']);
        $fields['text'] = htmlspecialchars($fields['text']);

        return $errors; 
    } 
?> 
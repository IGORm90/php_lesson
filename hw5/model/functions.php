<?php

    include_once('model/db.php');

    function messagesAll() :array{
        $sql = "SELECT * FROM articles ORDER bY dt_add DESC";
        $query = dbQuery($sql);
        return $query->fetchAll();
    }

    function messagesOne(int $id){
		  $sql = "SELECT * FROM articles WHERE id_art=$id";
		  $query = dbQuery($sql);
		  return $query->fetch();
	  }

    function messagesAdd(array $fields) :bool{
        if ($fields['id_cat'] === 0){
          $sql = "INSERT articles (name, text) VALUES (:name, :text)";
        } else {
        $sql = "INSERT articles (name, text, id_cat) VALUES (:name, :text, :id_cat)";
        }
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
        if($fields['id_cat'] === ''){
          $errors[] = 'категория не выбранна';
        } else if($fields['id_cat'] === 'sport'){
            $fields['id_cat'] = 1; 
          } else if($fields['id_cat'] === 'games') {
            $fields['id_cat'] = 2; 
          } else {
            $errors[] = 'неправильная категория';
          }
    

        $fields['name'] = htmlspecialchars($fields['name']);
        $fields['text'] = htmlspecialchars($fields['text']);

        return $errors; 
    } 

    function messagesValidateEdit(array &$fields) :array{
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


    function checkUrl(string $url) :bool{
		  return !!preg_match('/[0-9]/', $url);
    }
    
    function lastId() :string{
      $db = dbInstance();
      return $db->lastInsertId();
    }
    
    function editArticle(array $fields, string $id) :bool{
      $sql = "UPDATE articles SET name=:name, text=:text WHERE id_art=$id";
      dbQuery($sql, $fields);		
      return true;
    }
    
    function delArticle(string $id) :bool{
      $sql = "DELETE FROM articles WHERE id_art=$id";
      dbQuery($sql);
      return true;
  }
  
  function getAllcategories() :array{
    $sql = "SELECT * FROM category ORDER BY id_cat ASC";
    $query = dbQuery($sql);
    return $query->fetchAll();
  }

    function messagesbyCategory(int $id) :array{
      $sql = "SELECT * FROM articles WHERE id_cat=$id ORDER BY dt_add DESC";
      $query = dbQuery($sql);
      return $query->fetchAll();
  }

?> 
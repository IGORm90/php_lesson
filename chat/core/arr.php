<?php

    //$target - одномерный ассоциативный массив
    //$fields - обычныйб содержит список строк
    function extractFields(array $target, array $fields) :array{
         $res = [];

         foreach($fields as $field){
             $res[$field] = trim($target[$field]);
         }

         return $res;
    }

?>
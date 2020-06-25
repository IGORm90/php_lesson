<?php

include_once('model/functions.php');
$messages = messagesAll();
$category = getAllcategories();
$isTable = ($_GET['view'] ?? '') === 'table';
$template = $isTable ? 'v_index_table' : 'v_index';

$alertAdded = false;

if(isset($_SESSION['message.added'])){
    $alertAdded = true;
    unset($_SESSION['message.added']);
}

$pageTitle = 'All messages';
$pageContent = template($template, [
    'messages' => $messages,
    'category' => $category,
    'alertAdded' => $alertAdded
])
?>
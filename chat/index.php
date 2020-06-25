<?php 

    $cname = $_GET['c'] ?? 'index';
    include_once("controllers/$cname.php");

    

?>
<?php

    declare(strict_types=1);

    include_once('model/gallery.php');

    $files = scandir('images');
    $images = array_filter($files, function($f){
        return is_file("images/$f") && checkName($f);
    });

    // foreach($files as $f){
    //     if(is_file("images/$f") && preg_match('/.*\jpg$/', $f)){
    //         $images[] = $f;
    //     }
    // }



    echo '<pre>';
    print_r($files);
    print_r($images);
    echo '</pre>';

?>

<div class="gallary">
    <? foreach($images as $img): ?>
    <img src="images/<?=$img?>" alt="" width="100">
    <? endforeach; ?>
    
</div>
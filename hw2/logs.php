<?php

    $log_scan = scandir('db');
    $log_files = [];
    foreach($log_scan as $f){
        if(is_file("db/$f") && preg_match('/.*\.txt$/', $f)){
            $log_files[$f] = $f;
        }
    }
    //print_r($log_files);
    //var_dump($log_files);

?>
<h2>Log files</h2>
<? foreach($log_files as $key => $f): ?>  
        <div class="log">
                <a href="logtable.php?log=<?=$key?>"><?=$f?></a>
        </div>
<? endforeach; ?>


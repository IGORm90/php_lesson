<?php

    // $f = fopen('db.txt', 'w');

    // for($i = 0; $i < 1000000; $i++){
    //     fwrite($f, mt_rand(1000000, 10000000));
    // }
    // fclose($f);

    // $a = file('db.txt');
    // echo memory_get_usage();
        $d = fopen('db.txt', 'r');
        $total =0;
        $cnt = 0;

        while(!feof($d)){
            $str = rtrim(fgets($d));
            if($str !== ''){
                $total += (int)$str;
                $cnt++;
            }
        }

        echo $total/$cnt;
        fclose($d);
?>
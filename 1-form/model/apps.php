<?php

    function getApps() : array{
        //$lines = file('db/apps.txt');
        $f = fopen('db/apps.txt', 'r');
        $str = fread($f, filesize('db/apps.txt'));
        $lines = explode("\n", $str);
        unset($lines[count($lines) - 1]);
        $apps = [];

        foreach($lines as $line){
            $apps[] = appStrToArr($line);
        }
        return $apps;
        // $str = file_get_contents('db/apps.txt');
        // return json_decode($str, true);
    }

    function appStrToArr($str){
        $str = rtrim($str);
        $part = explode(';', $str); 
        return  ['dt' => $part[0], 'name' => $part[1], 'phone' => $part[2],];
    }


    function addApp(string $name, string $phone) : bool{
        $dt = date("Y-d-m H:i:s");
        $app = "$dt;$name;$phone\n";
        //file_put_contents('db/apps.txt', $app, FILE_APPEND);
        $f = fopen('db/apps.txt', 'a');
        fwrite($f, $app);
        fclose($f);
        return true;
    }

?>
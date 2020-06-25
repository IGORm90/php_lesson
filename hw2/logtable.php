<?php

$log = ($_GET['log'] ?? '');

$f = file('db/'.$log);
$logs = [];

foreach($f as $line){
    $line = rtrim($line);
    $parts = explode(';', $line);
    $logs[] = ['ip' => $parts[0], 'dt' => $parts[1], 'url' => $parts[2], 'ref' => $parts[3]];
}

?>

<table>
    <tr>
        <td>ip</td>
        <td>date</td>
        <td>url</td>
        <td>referal</td>
    </tr>
    <? foreach($logs as $l): ?>
    <tr>
        <td><?=$l['ip']?></td>
        <td><?=$l['dt']?></td>
        <td><?=$l['url']?></td>
        <td><?=$l['ref']?></td>
    </tr>
    <? endforeach; ?>
</table>
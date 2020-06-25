<h1>Blog</h1>
<a href="<?=BASE_URL?>add">Add message</a>
<a href="<?=BASE_URL?>">View as List</a>
<table border="1">
    <? foreach($messages as $message): ?>
    <div>
        <tr>
        <td><?=$message['name']?></td>
        <td><?=$message['dt_add']?></td>
        <td><?=$message['text']?></td>
        </tr>
    </div>
    <? endforeach; ?>
</table>
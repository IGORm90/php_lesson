<h1>chat</h1>
<a href="add.php">Add message</a>
<a href="index.php">View as List</a>
<table>
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
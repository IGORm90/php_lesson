<h1>chat</h1>
<a href="index.php?c=add">Add message</a>
<a href="index.php?view=table">View as table</a>
<div>
    <? foreach($messages as $message): ?>
    <div>
        <strong><?=$message['name']?></strong>
        <em><?=$message['dt_add']?></em>
        <div><?=$message['text']?></div>
        <a href="index.php?c=message&id=<?=$message['id_message']?>">Read more</a>
        <hr>
    </div>
    <? endforeach; ?>
</div>
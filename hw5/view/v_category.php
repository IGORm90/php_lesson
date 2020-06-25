
<div>
    <hr>
    <? foreach($messages as $message): ?>
    <div>
        <strong><?=$message['name']?></strong>
        <em><?=$message['dt_add']?></em>
        <div><?=$message['text']?></div>
        <a href="<?=BASE_URL?>article/<?=$message['id_art']?>">Read more</a>
        <hr>
    </div>
    <? endforeach; ?>
    <a href="<?=BASE_URL?>">Main</a>
</div>
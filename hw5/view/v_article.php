
<div class="row">
    <aside class="col col-3">
    <? if($user['id_user'] == $message['id_user']): ?>
        <ul class="list-group">
            <li class="list-group-item"><a href="<?=BASE_URL?>edit/<?=$message['id_art']?>">Edit</a></li>
            <li class="list-group-item"><a href="<?=BASE_URL?>delete/<?=$message['id_art']?>">delete</a></li>
        </ul>
        <? endif; ?>
    </aside>
    <main class="col col-9">
        <h1><?=$message['name']?></h1>
        <div>
        <?=$message['text']?>
        </div>
        <hr>
    </main>   
</div>
    
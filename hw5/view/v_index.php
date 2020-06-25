<div class="row">
    
        <aside class="col col-3">
            <ul class="list-group">
                <li class="list-group-item"><a href="<?=BASE_URL?>?view=table">View as table</a></li>
                <li class="list-group-item">
                    <ul>
                    <li>Categories</li>
                <? foreach($category as $cat): ?>
                    <li><a href="<?=BASE_URL?>category/<?=$cat['id_cat']?>"><?=$cat['cat_name']?></a></li>
                <? endforeach; ?>
                </ul>
                </li>
            </ul>
        </aside>
        <main class="col col-9">
            <? if($alertAdded): ?>
            <div class="alert alert-success">
                Your message was added
            </div>
            <hr>
            <? endif; ?>
            <? foreach($messages as $message): ?>
                <div>
                    <strong><?=$message['name']?></strong>
                    <em><?=$message['dt_add']?></em>
                    <div><?=$message['text']?></div>
                    <a href="<?=BASE_URL?>article/<?=$message['id_art']?>">Read more</a>
                    <hr>
                </div>
            <? endforeach; ?>
</main>
</div>
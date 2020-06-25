<div class="form">
    <form method="post">


    <div class="form-group">
    <label for="exampleFormControlInput1">Title:</label>
    <input type="text" class="form-control" name="name" value="<?=$fields['name']?>">
    </div>
    Text:
    <div class="form-group">
    <textarea class="form-control" name="text" rows="3"><?=$fields['text']?></textarea>
    </div>
    Category:
    <div class="form-group">
    <input type="text" class="form-control" name="id_cat" value="<?=$fields['id_cat']?>">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
        <a href="<?=BASE_URL?>">main</a>
        <div class="error">
            <? foreach($validateErrors as $error): ?>
                <p><?=$error?></p>
            <? endforeach; ?>
        </div>
    </form>
</div>
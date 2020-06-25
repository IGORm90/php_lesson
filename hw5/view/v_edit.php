<div class="form">
	<form method="post">
		Name:<br>
		<input type="text" name="name" value="<?=$article['name']?>"><br>
		Text:<br>
		<input type="text" name="text" value="<?=$article['text']?>"><br>
		<button>Send</button>
    </form>
    <div class="error">
            <? foreach($validateErrors as $error): ?>
                <p><?=$error?></p>
            <? endforeach; ?>
    </div>
</div>
<hr>
<a href="<?=BASE_URL?>">Move to main page</a>

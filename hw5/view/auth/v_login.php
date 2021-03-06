<form method="post">
    <div class="form-group">
        <label for="auth-login">Login</label>
        <input type="text" class="form-control" id="auth-login" name="login">
    </div>
    <div class="form-group">
        <label for="auth-login">Password</label>
        <input type="password" class="form-control" id="auth-password" name="password">
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="login-remember" name="remember">
        <label class="form-check-label" for="login-remember">
            Remember auth to 1 month
        </label>
    </div>
    <hr>
    <button class="btn btn-primary">Auth now</button>
    <? foreach($authErr as $err): ?>
        <hr>
        <div class="alert alert-danger">
            <?=$err?>
        </div>
    <? endforeach; ?>
</form>
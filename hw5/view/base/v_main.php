<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?=$title?></title>
	<link rel="canonical" href="<?=$canonical?>">
    <link rel="stylesheet" href="<?=BASE_URL?>assets/css/bootstrap.min.css"> 
	<link rel="stylesheet" href="<?=BASE_URL?>assets/css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet"> 
</head>
<body>
	<header>
		<div class="logo">
			<a href="<?=BASE_URL?>"><img class="graficlogo" alt="Logo" src="<?=BASE_URL?>assets/images/logo.png"</a>
		</div>
		
		<nav>
			<div class="topnav" id="myTopnav">
				<a href="<?=BASE_URL?>">My site</a>
				<a href="<?=BASE_URL?>contacts">Contacts</a>
				<? if($user !== null): ?>
				<a href="<?=BASE_URL?>add">Add message</a>
				<a href="<?=BASE_URL?>auth/logout">LogOut</a>
				<? endif; ?>
				<? if($user === null): ?>
				<a href="<?=BASE_URL?>auth/login">Login</a>
				<a href="<?=BASE_URL?>auth/registr">Registr</a>
				<? endif; ?>
				<a id="menu" href="#" class="icon">&#9776</a>
			</div>
		</nav>
		<? if($user !== null): ?>
		<p><?=$user['name']?></p>
		<? endif; ?>
	</header>


    <div class="site-content">
        <div class="container">     
        <?=$content?>
        </div>
    </div>


	<footer>
		<nav>
        <a href="<?=BASE_URL?>">My site</a>
		<a href="<?=BASE_URL?>add">Add message</a>
		<a href="<?=BASE_URL?>contacts">Contacts</a>
		</nav>
	</footer>
	<script src="<?=BASE_URL?>assets/js/script.js"></script>
</body>
</html>
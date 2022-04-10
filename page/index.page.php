<?php
if (AuthGuard::is_user_logged_in()){
    header('Location: '.APP_URL.'index.php?page=dashboard');
    exit();
}
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aplikacija</title>
	<link href="./css/style.css" rel="stylesheet" type="text/css">
	<meta name="viewport" content="width=device-width">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>
	<div class="w100 v100 flex wrapper index-page" data-show="true">
		<div class="container">
			<img class="main-logo" src="https://adminlab387.b-cdn.net/dist/images/logos/logo.png" alt="Application Logo">
			<a class="button" href="index.php?page=login">Login</a>
			<a class="button" href="index.php?page=register">Register</a>
			<a class="button" href="index.php?page=forgotten-password">Forgotten Password</a>
		</div>
	</div>
</body>
</html>




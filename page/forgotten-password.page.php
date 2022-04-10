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
	<title>Forgotten Password</title>
	<link href="./css/style.css" rel="stylesheet" type="text/css">
	<meta name="viewport" content="width=device-width">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
</head>

<body>
	<div class="wrapper forgotten-page">
		<div class="container">
			
			<a href="index.php?page=home">
				<img class="main-logo" src="https://adminlab387.b-cdn.net/dist/images/logos/logo.png" alt="Application Logo">
			</a>
			
			<p class="text-center">
				Forgot your password?
		 		<br>
				No problem, you can request password change here:
			</p>
			<br>
			<form action="#" method="POST" class="m50">
				<input class="input" type="email" name="email" placeholder="Insert your email:" required>
				<br>
				<input class="button" type="submit" value="Reset password">
			</form>
			
			<hr class="hr">
			<p class="text-center">or use these links:</p>
			<div class="row">
				<a class="button button-horizontal" href="index.php?page=login">Login</a>
				<a class="button button-horizontal" href="index.php?page=register">Register</a>
			</div>
			
		</div>
	</div>
</body>
</html>

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
	<title>Login</title>
	<link href="./css/style.css" rel="stylesheet" type="text/css">
	<meta name="viewport" content="width=device-width">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
</head>

<body>
	<div class="wrapper login-page">
		<div class="container">
			
			<a href="">
				<img class="main-logo" src="https://adminlab387.b-cdn.net/dist/images/logos/logo.png" alt="Application Logo">
			</a>
			
			<p>Login into your account to start working with this application!</p>
			<br>
			<form action="#" method="POST" class="m50" id="login-form">
				<input class="input" type="email" name="email" placeholder="Insert your email here:" required>
				<br>
				<input class="input" type="password" name="password" placeholder="Insert your password here:" required>
				<div class="row">
					<div class="left">
						<input type="checkbox" name="remember-me">
						<span>Remember my login!</span>
					</div>
					<div class="right">
						<input class="button button-horizontal" type="submit">
					</div>
				</div>
			</form>
			
			<hr class="hr">
			<p class="text-center">or use these links:</p>
			<div class="row">
				<a class="button button-horizontal" href="index.php?page=register">Register</a>
				<a class="button button-horizontal" href="index.php?page=forgotten-password">Forgotten password</a>
			</div>
			
		</div>
	</div>
    <script src="js/script.js"></script>
</body>
</html>










<?php session_start();?> <!-- iniciamos sesion para poder trabjar con las variables de sesion del archivo limit_pag.php. -->
<!doctype html>
<html lang="es">
<head>  
	<!-- Informació Meta -->
	<meta charset="utf-8"/>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">

	<!-- Enllaç a l'arxiu CSS Extern -->
	<link rel=stylesheet href="css.css" type="text/css"/>
	<!-- <link rel="stylesheet" href="demo.css" type="text/css" media="screen" /> -->
	<!--CSS Intern-->
	<style type="text/css"></style>
  <script src="js/login.js"></script>

	<!-- Títol de la pàgina -->
	<title>USERAPP</title>
</head>
<body>
	<header></header>
	<section>
		<article>
		<h2>Log in</h2>
			<!-- <form onsubmit="return validate_login();" action="edituser.php" method="POST"> -->
			<form action="db/login.php" method="POST">
					<input type="text" name="username" id="username" placeholder="username" onblur="validate_username();" required><br>
					<div class="error" id="message_username"></div>
					<input type="password" name="password" id="password" placeholder="password" onblur="validate_password();" required><br>
					<div class="error" id="message_password"></div>
				<input type="checkbox" id="rememberuser" name="rememberuser" value="rememberuser">
				<label for="rememberuser">Remember username</label><br>
				<input type="submit" value="Send" >
			</form>
			<p class="join-or-login">Don't have an account? <a href="registration.php">Join now.</a></p>
		</article> 
	</section>
	<footer>
___________________________________
	</footer>
</body>
</html>

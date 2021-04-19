<?php session_start();
if (!isset($_SESSION["username"])){ //if user are not loged in go login
	header("Location: index.php");
	die();}
	else{
		$user=$_SESSION["username"];
	}
 include "db/get_delete_users.php";
?> <!-- iniciamos sesion para poder trabjar con las variables de sesion. -->
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
	<script  type="text/javascript" src="js/login.js"></script>

	<!--CSS Intern-->
	<style type="text/css">
	</style>

	<!-- Títol de la pàgina -->
	<title>Edit user</title>
</head>
<body>
	<header>
	</header>
	<section>
		<article>
			<h2>Editar perfil</h2>
			<?php 
			$return = get_delete_users($user); // recogemos los datos de la pelicula a editar mediante la url que contiene la id. 
			?>			
			<?php
				echo "<p>Avatar actual:</p>";
				echo "<img src=img/$return[6].jpg>";
				?>
				<form method="post" action="db/usereditDB.php" name="editarpelicula" id="editar_pellicula" enctype="multipart/form-data">
					<input type="hidden" name="id" id="id"  value='<?php echo $return[7]; ?>' required> <hr/>
					<label>Nombre de usuario</label><br>
					<input type="text" name="username" id="username" class="form" placeholder="Tu Nombre de Usuario" value='<?php echo $return[0]; ?>' required><br>
					<label>Correo electronico</label><br>
					<input type="email" name="mail" id="mail" class="form" placeholder="correo@correo.dominio" value='<?php echo $return[1]; ?>' required><br>
					<label>Contraseña</label><br>
					<input type="password" name="password" id="password" class="form" placeholder="Tucontraseña" value='<?php echo $return[2]; ?>' required><br>
					<label>Nombre</label><br>
					<input type="text" name="name" id="name" class="form" placeholder="Tu Nombre" value='<?php echo $return[3]; ?>' required><br>
					<label>Fecha de nacimiento</label><br>
					<input type="date" name="birthdaydate" id="birthdaydate" class="form" value='<?php echo $return[4]; ?>' required><br>
					<label>Bio</label><br>
					<input type="text" name="bio" id="bio" class="form" placeholder="Tu información personal o profesional." value='<?php echo $return[5]; ?>' required><br>		
					<label>Foto de perfil</label><br>
					<input type="file" name="imagen" class="form" id="imagen" value='<?php echo $return[6]; ?>'><br>
					<br>
					<input type="submit" value="Añadir a la DB" class="botonpaginasañadirpelicula">

				</form>
				
							
				<a href='index.php' class='nav-item'>Volver al inicio</a>
				<a href='db/deleteuserDB.php' class='nav-item'>Eliminar el usuario</a>

		</article> 
	</section>
	<footer>_________________	</footer>
</body>
</html>

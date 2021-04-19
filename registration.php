<?php session_start();?> <!-- iniciamos sesion para poder trabjar con las variables de sesion. -->
<?php 
include "connection.php"?> 
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

	<!--CSS Intern-->
	<style type="text/css">
	</style>

	<!-- Títol de la pàgina -->
	
	<title>Registrate para poder acceder a tu perfil</title>

	<!-- <div class="contenedormenu">  Class hr-nav-2
    	<nav class="nav-container style-3">
				<a href="index.php" class="nav-item">Inicio</a>
        <a href="verpeliculas.php" class="nav-item">Ver o editar Filmoteca</a>
				<a href="about.php" class="nav-item">About</a>				
				<a href="cercador.php" class="nav-item">Hacer una busqueda</a>				
    </nav>
</div> -->
</head>

<body>
	<header>Registrate para poder acceder a tu perfil</header>
	<section>
		<article>
			<h2>Añadir un nuevo usuario</h2>
				<form method="post" action="db/adduserDB.php" name="add_pellicula" id="add_pellicula" enctype="multipart/form-data">
					<label>Nombre de usuario</label><br>
					<input type="text" name="username" id="username" class="form" placeholder="Tu Nombre de Usuario" required><br>
					<label>Correo electronico</label><br>
					<input type="email" name="mail" id="mail" class="form" placeholder="correo@correo.dominio" required><br>
					<label>Contraseña</label><br>
					<input type="password" name="password" id="password" class="form" placeholder="Tucontraseña" required><br>
					<label>Nombre</label><br>
					<input type="text" name="name" id="name" class="form" placeholder="Tu Nombre" required><br>
					<label>Fecha de nacimiento</label><br>
					<input type="date" name="birthdaydate" id="birthdaydate" class="form" required><br>
					<label>Bio</label><br>
					<input type="text" name="bio" id="bio" class="form" placeholder="Tu información personal o profesional." required><br>
										
					<label>Foto de perfil</label><br>
					<input type="file" name="imagen" class="form" id="imagen"><br>
					<br>
					<input type="submit" value="Añadir a la DB" class="botonpaginasañadirpelicula">
				</form>
				<br><br><a href='index.php' class='nav-item'>Volver al inicio</a>
		</article> 
	</section>
	<footer>
	_____________________________
	</footer>
</body>
</html>

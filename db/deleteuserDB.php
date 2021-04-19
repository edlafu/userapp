<?php
session_start();
//dades de connexió
include "../connection.php";

$username = $_SESSION['username'];
$sql = "DELETE FROM $taula WHERE username = '$username'";
  


//fem la connexió
$conn = new mysqli($servidor, $usuari, $contrasenya, $basededades);

// comprovem la connexió
if ($conn->connect_error) { //si falla
echo "Fallada en la connexió: ".$conn->connect_error;
die();
// }else{ //tot ok
//   echo "ok<br>";
}


//fem la consulta per a poder eliminar la pelicula
if ($conn ->query($sql) === TRUE){ // es a dir si hi ha conexio a la db seguim endevant.
  echo "OK! Pelicula eliminada de la db.";
  //comandament per a eliminar la imatge
  unlink("../img/$id.jpg");
  echo 	"<a href='../index.php' class='nav-item'>Volver al inicio</a>";
}else {
  echo "Error: ".$sql."<br>".$conn->error; 
}

$conn->close();
?>
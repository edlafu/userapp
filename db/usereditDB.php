<?php
include "../connection.php";
  
  //comprobació per a saber si l'usuari no ha pasat pel formulari i poderlo xutar
  if($_POST == null){
  header("Location: ../edituser.php");
  die();
   }

    //Llistem les variables amb les que treballarem per a poder afegir pelicules a la DB
    $username = $_POST["username"];
    $mail = $_POST["mail"];
    $password = $_POST["password"];
    $name = $_POST["name"];
    $birthdaydate = $_POST["birthdaydate"];
    $bio = $_POST["bio"];
    $id = $_POST["id"];

    //escribim la consulta que voldrem executar
$sql = "UPDATE $taula SET username = '$username, mail='$mail', password='$password', name='$name', birthdaydate='$birthdaydate', bio='$bio' WHERE id = '$id'";


//fem la connexió
$conn = new mysqli($servidor, $usuari, $contrasenya, $basededades);

// comprovem la connexió
if ($conn->connect_error) { //si falla
return "Fallada en la connexió: ".$conn->connect_error;
die();
// }else{ //tot ok
//   echo "ok<br>";
}

//fem la consulta per a poder afegir pelicules a la db
if ($conn ->query($sql) === TRUE){ // es a dir si hi ha conexio a la db seguim endevant.
  echo "OK!";
}else {
  echo "Error: ".$sql."<br>".$conn->error; 
}

$conn->close();

//començem amb el proces de pujat la imatge al servidor 

$ruta_desti = "../img/$id.jpg";
$tipus_arxiu = $_FILES['imagen']['type'];
$tamany_arxiu = $_FILES['imagen']['size'];
$tamany_max = 51200;
$ruta_temporal = $_FILES['imagen']['tmp_name'];

//fer la comprobacio de la imatge
  if (!($tamany_arxiu = 0)) {
    if(!((strpos($tipus_arxiu, "jpeg")) && ($tamany_arxiu < $tamany_max))){
  echo "extensio o tamaño erroneo.";
  echo '<a href="../edituser.php" class="nav-item">Edita usuario</a>';  // PROBLEMA SI NO SE CARGA UNA IMAGEN LA PELICULA NO SE PUEDE SUBIR A LA DB.
}else{
  if(move_uploaded_file($ruta_temporal, $ruta_desti)){
    echo "El archivo se ha cargado.";
    header("Location: ../index.php");
    die();
  }else{
    echo " Epic fail, sorry...";
  }
}
  }else{
    echo " Epic fail, no image...";
  }
header("Location: ../index.php");
die();

?>
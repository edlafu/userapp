<?php
  function get_delete_users($user){

		include "connection.php";
		$username = $_SESSION['username'];


  $sql = "SELECT * FROM $taula WHERE username = '$username'";

//connect to database
$conn = new mysqli($servidor, $usuari, $contrasenya,  $basededades);

//check connection
if ($conn->connect_error) {
	return "DATABASE ERROR: ".$conn->connect_error;
	die();
}

//run the query
$resultat = $conn->query($sql);


//check results
if ($resultat->num_rows != 0) { //num rows = 0 means thant this user doesnt exist
	while($fila = $resultat->fetch_assoc()) {
	// $return = -1;
	$username = $fila["username"];
			$mail = $fila["mail"];
			$password = $fila["password"];
			$realname = $fila["realname"];
			$birthdaydate = $fila["birthdaydate"];
			$bio = $fila["bio"];
			$id = $fila["id"];
		}
}


$conn->close();

if(file_exists("img/$id.jpg")){
	$img = $id;
}else{
	$img = 0;
}


$return = [$username, $mail, $password, $realname, $birthdaydate, $bio, $img, $id];
return $return;
	// $query=mysqli_query($basededades,"SELECT * FROM users where username='$user'")or die(mysqli_error());
	// $row=mysqli_fetch_array($query);
  }

?>
<?php
	$server = "localhost";
	$username = "root";
	$password = "";
	$db = "gestion";
	$conn = mysqli_connect($server, $username, $password, $db);
	if(!$conn){
		echo "Vous n'êtes pas connecté à la base de donnée";
	 }
?>
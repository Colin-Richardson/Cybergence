<?php
	$servername = "localhost:3306";
	$dbUsername = "YOURUSERNAMEHERE";
	$dbPassword = "mustangs";
	$dbName = "YOURUSERNAMEHERE";
	$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);
	if (!$conn){
		die("Connection failed: ".mysqli_conect_error());
	}

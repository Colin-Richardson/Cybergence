<?php
	$servername = "localhost:3306";
	$dbUsername = "mahs_mthornton";
	$dbPassword = "mustangs";
	$dbName = "mahs_mthornton";
	$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);
	if (!$conn){
		die("Connection failed: ".mysqli_conect_error());
	}

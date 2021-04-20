<?php  
	require 'dbh.inc.php';
//creates sales data to populate graphs
$possibleProducts = ["Augmented Arms","Exosuit","Cyber Contacts"];
$i = 0;
$first = ["Clay","April","Timothy","Peter","Linus","Richard","Max","Mari","Shrey","Christian","Stone","Raj","Drake","Drew","Anmar","Brendan","Davis"];
$last = ["Sweo","Doumitt","Smith","Johnson","Stallman","Torvalds","Patel","Abdi","Mcaffee"];
while ($i < 100)
{
	$user = $first[random_int(0,sizeof($first)-1)].$last[random_int(0,sizeof($last)-1)]
	$email = 
	$hashedPwd = password_hash(random_int(0,999999) PASSWORD_DEFAULT);
	$sql = "INSERT INTO Users (username, email, password) VALUES (?, ?, ?)";
	$ if (!mysqli_stmt_prepare($stmt, $sql))
 	{
		 header("location: ../index.php?error=sqlerror");       
	 	exit();
 	} else
 	{
		mysqli_stmt_bind_param($stmt, "sss", $user, $email, $hashedPwd);
	 	mysqli_stmt_execute($stmt);
 	}
stmt = mysqli_stmt_init($conn);   
	$i++;
}



$product_name = $possibleProducts[random_int(0,2)];
$user = '78';
$date = "2021-04-01";
$sql = "INSERT INTO Sales (product_name, user, date) VALUES (?, ?, ?)";
$stmt = mysqli_stmt_init($conn);   
 if (!mysqli_stmt_prepare($stmt, $sql))
 {
	 header("location: ../index.php?error=sqlerror");       
	 exit();
 } else
 {
	 mysqli_stmt_bind_param($stmt, "sss", $product_name, $user, $date);
	 mysqli_stmt_execute($stmt);
 }


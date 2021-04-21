<?php 
if(isset($_POST['user']))
{
	require 'dbh.inc.php';
	$address = $_POST['address'];
	$user = $_POST['user'];
	if(empty($address))
	 {
		 echo "empty field";
		 exit();
	 } elseif (!preg_match("/^[a-zA-Z0-9]*$/", $address))
	 {
		 echo "invalid characters";
		 exit();
	 
	 } else 
	 {
		  $sql = "INSERT INTO paymentInfo (user, btcAddress) VALUES (?, ?)";
		  $stmt = mysqli_stmt_init($conn);        
		  if (!mysqli_stmt_prepare($stmt, $sql))
		  {
			  echo "database error";
			  exit();
		  } else
		  {
			  mysqli_stmt_bind_param($stmt, "ss", $user, $address);
			  mysqli_stmt_execute($stmt);
			  echo "success";
			  exit();

	 	}
	 }	
}


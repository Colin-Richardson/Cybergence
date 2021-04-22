<?php 
$url = $_POST['product'];
$products = 
[
	"augmented_arms.php"=>"augmentedarms",
	"cyber_contacts.php"=> "cybercontacts",
	"exosuit.php" => "exosuit",	
];
require 'dbh.inc.php';
$sql = "SELECT * FROM Products WHERE product_name=?;";
$stmt = mysqli_stmt_init($conn);        
if (!mysqli_stmt_prepare($stmt, $sql))
{
	exit();
} else
{
	mysqli_stmt_bind_param($stmt,"s", $products[$url]);
	mysqli_stmt_execute($stmt);

	$result = mysqli_stmt_get_result($stmt);
	if ($row = mysqli_fetch_assoc($result))
	{
		echo $row['Price'];
		exit();
	} 
}


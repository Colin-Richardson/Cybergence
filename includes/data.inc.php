<?php  
	require 'dbh.inc.php';
//creates sales data to populate graphs
function generateAccounts($conn, $num) //creates a large number of accounts to be used for sales data
{
	$i = 0;
	//creates a name, doesn't check for repeats, becaues a repeat has a low chance of occurring
	$first = ["Clay","April","Timothy","Peter","Linus","Richard","Max","Mari","Shrey","Christian","Stone","Raj","Drake","Drew","Anmar","Brendan","Davis"];
	$last = ["Sweo","Doumitt","Smith","Johnson","Stallman","Torvalds","Patel","Abdi","Mcaffee"];
	$fun = random_int(0,999999);  
	while ($i < $num)
	{
		$user = $first[random_int(0,sizeof($first)-1)].$last[random_int(0,sizeof($last)-1)].$fun;
		$email = $user."@email.com";
		$hashedPwd = password_hash(random_int(0,999999), PASSWORD_DEFAULT);
		$sql = "INSERT INTO Users (username, email, password) VALUES (?, ?, ?)";
		$stmt = mysqli_stmt_init($conn);   
		if (!mysqli_stmt_prepare($stmt, $sql))
		{
			 header("location: ../index.php?error=sqlerror&");       
			exit();
		} else
		{
			mysqli_stmt_bind_param($stmt, "sss", $user, $email, $hashedPwd);
			mysqli_stmt_execute($stmt);
		}
		$i++;
	}
}
function lastSaleDate($conn) // pass in conn variable and returns newest Date in Sales
{
	$sql = "SELECT * FROM Sales order by  date  desc;";
	$stmt = mysqli_stmt_init($conn);   
	if (!mysqli_stmt_prepare($stmt, $sql))
	{
		return "error";
	} else
	{
		mysqli_stmt_execute($stmt);
		$result = mysqli_stmt_get_result($stmt);
		$result2 = mysqli_fetch_assoc($result);
		$lastDate = $result2["date"];
		return $lastDate;
	}
}
function daysFromNow($start_date, $end_date)
{
	$diff = strtotime($start_date) - strtotime($end_date);
	return ceil(abs($diff / 86400));

}
function numOfUsers($conn) //returns number of users and starting id
{
	$sql = "SELECT * FROM Users order by  id  asc;";
	$stmt = mysqli_stmt_init($conn);   
	if (!mysqli_stmt_prepare($stmt, $sql))
	{
		return "error";
	} else
	{
		mysqli_stmt_execute($stmt);
		$result = mysqli_stmt_get_result($stmt);
		$result2 = mysqli_fetch_assoc($result);
		$smallestId = $result2["id"];
		mysqli_stmt_execute($stmt);
		mysqli_stmt_store_result($stmt);
		$numUsers = mysqli_stmt_num_rows($stmt);
		return array("smallestId" => $smallestId, "numUsers" => $numUsers);
	}
}
function makeSale($conn,$date) // $$$$
{
	$possibleProducts = ["Augmented Arms","Exosuit","Cyber Contacts"];
	$product_name = $possibleProducts[random_int(0,2)];
	$userData = numOfUsers($conn);
	$user = random_int($userData["smallestId"],$userData["numUsers"]);
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
}

function main($conn)
{
	$currentDate = date('Y-m-d');
	$lastDate = lastSaleDate($conn);
	$daysFromCurrentSales =  daysFromNow($lastDate, $currentDate);
	$i = 0;
	$userData = numOfUsers($conn);
	while ($i < $daysFromCurrentSales)
	{
		$newAccs = random_int(0,3);
		generateAccounts($conn, $newAccs);
		//new accounts aren't factored in, because trying to crashed phpmyadmin and trying again feels dangerous
		$date = new DateTime($lastDate);
		$inc = $i+1;
		$date->modify("+".$inc." day");
		$saleDate = $date->format('Y-m-d');
		$i++;
		for ($x=0; $x < random_int(5,15); $x++)
		{
			makeSale($conn, $saleDate);
		}
	}
}

main($conn);

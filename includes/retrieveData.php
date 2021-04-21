<?php
require 'dbh.inc.php';
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
	$toEncode = array();
	while($row = mysqli_fetch_assoc($result) )
	{
		 $toEncode[] = $row;
	}
	echo json_encode($toEncode);
}





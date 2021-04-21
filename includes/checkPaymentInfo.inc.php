<?php 
if(isset($_POST['user']))
{
	require 'dbh.inc.php';
	$user = $_POST['user'];
	 if (!preg_match("/^[a-zA-Z0-9]*$/", $user)) //probably unneccessary, but could stop some issues
	 {
		 echo json_encode(["error", "invalid characters"]);
		 exit();
	 
	 } else 
	 {
		  $sql = "SELECT * FROM paymentInfo WHERE user=?;";
		  $stmt = mysqli_stmt_init($conn);        
		  if (!mysqli_stmt_prepare($stmt, $sql))
		  {
			  echo json_encode( ["error", "database error"]);
			  exit();
		  } else
		  {
			mysqli_stmt_bind_param($stmt, "s", $user);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			if ( mysqli_stmt_num_rows($stmt) > 0)
			{
				mysqli_stmt_execute($stmt);
				$result = mysqli_stmt_get_result($stmt);
				if ($row = mysqli_fetch_assoc($result))
				{
					echo json_encode( ["success", $row['btcAddress']] );
					exit();
				}
			} else
			{
				echo json_encode( ["error", "no results"] );
				exit();

			}
	 	}
	 }	
}


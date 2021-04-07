<?php
	if(isset($_POST['contact-submit']))
	{
		require 'dbh.inc.php';
		session_start(); //remove if header 
		$user = $_SESSION['userId'];
		$msg = $_POST['msg'];		

		if(empty($msg) || empty($user))
		{
			header("location: ../contact.php?error=emptyfields&msg=".$msg."&user=".$user);	
			exit();
		}  elseif (!preg_match("/^[a-zA-Z0-9]*$/", $msg)) 
		{
			header("location: ../signup.php?error=invalidchars&msg=".$msg);	
			exit();
		
		}  else 
		{
			$sql = "SELECT user FROM Contact WHERE user=?";
			$stmt = mysqli_stmt_init($conn);	
			if (!mysqli_stmt_prepare($stmt, $sql))
			{
				header("location: ../contact.php?error=sqlerror1");	
				exit();
			} else
			{
				mysqli_stmt_bind_param($stmt, "s", $user);
				mysqli_stmt_execute($stmt);
				mysqli_stmt_store_result($stmt);
				//$result= mysqli_stmt_fetch($stmt); //not real, change this to check last date of user and limit posts to one per 5 minutes
				$sql = "INSERT INTO Contact (user, message) VALUES (?, ?)";
				$stmt = mysqli_stmt_init($conn);	
				if (!mysqli_stmt_prepare($stmt, $sql))
				{
					header("location: ../contact.php?error=sqlerror");	
					exit();
				} else
				{
					mysqli_stmt_bind_param($stmt, "ss", $user, $msg);
					mysqli_stmt_execute($stmt);
					header("location: ../contact.php?AAAAAa=");	
					exit();
					
				}
			}
		}
		mysqli_stmt_close($stmt);
		mysqli_close($conn);
	} else 
	{
		header("location: ../signup.php");
		exit();
	}


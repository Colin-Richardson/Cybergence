<?php
	if(isset($_POST['contact-submit']))
	{
		require 'dbh.inc.php';
		//session_start(); //remove if header 
		$user = $_POST['userId'];
		$msg = $_POST['msg'];		

		if(empty($msg) || empty($user))
		{
			header("location: ../contact.php?error=emptyfields&msg=".$msg."&user=".$user);	
			exit();
		}  elseif (!preg_match("/^[a-zA-Z0-9]*$/", $msg)) 
		{
			header("location: ../signup.php?error=invaliduid&email=".$msg);	
			exit();
		
		}  else 
		{
			$sql = "SELECT username FROM Users WHERE username=?";
			$stmt = mysqli_stmt_init($conn);	
			if (!mysqli_stmt_prepare($stmt, $sql))
			{
				header("location: ../signup.php?error=sqlerror");	
				exit();
			} else
			{
				mysqli_stmt_bind_param($stmt, "s", $username);
				mysqli_stmt_execute($stmt);
				mysqli_stmt_store_result($stmt);
				$resultCheck = mysqli_stmt_num_rows($stmt);
				$sql = "INSERT INTO Contact (user, msg) VALUES (?, ?)";
				$stmt = mysqli_stmt_init($conn);	
				if (!mysqli_stmt_prepare($stmt, $sql))
				{
					header("location: ../signup.php?error=sqlerror");	
					exit();
				} else
				{
					$hashedPwd = password_hash($password, PASSWORD_DEFAULT);
					mysqli_stmt_bind_param($stmt, "ss", $user, $msg);
					mysqli_stmt_execute($stmt);
					header("location: ../login.php?signup=success");	
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


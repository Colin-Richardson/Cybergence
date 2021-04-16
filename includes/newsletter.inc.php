<?php
	if(isset($_POST['newsletter-submit']))
	{
		require 'dbh.inc.php';
		
		$email = $_POST['mail'];

		if(empty($email)) //check empty email
		{
			header("location: ../signup.php?error=emptyfields&email=".$email);	
			exit();
		} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) //validate email
		{
			header("location: ../signup.php?error=invalidemail&uid=".$username);	
			exit();
		
		}  else 
		{
			$sql = "SELECT email FROM Newsletter WHERE email=?";
			$stmt = mysqli_stmt_init($conn);	
			if (!mysqli_stmt_prepare($stmt, $sql)) //check db connection
			{
				header("location: ../signup.php?error=sqlerror");	
				exit();
			} else 
			{
				mysqli_stmt_bind_param($stmt, "s", $email);
				mysqli_stmt_execute($stmt);
				mysqli_stmt_store_result($stmt);
				if ( mysqli_stmt_num_rows($stmt) > 0) //check if email is already in db
				{
					header("location: ../signup.php?error=emailtaken&uid=".$username);	
					exit();
				}
				else
				{
					$sql = "INSERT INTO Newsletter (email) VALUES (?)";
					$stmt = mysqli_stmt_init($conn);	
					if (!mysqli_stmt_prepare($stmt, $sql))
					{
						header("location: ../signup.php?error=sqlerror");	
						exit();
					} else
					{
						mysqli_stmt_bind_param($stmt, "s", $email);
						mysqli_stmt_execute($stmt);
						header("location: ../login.php?signup=success");	
						exit();
						
					}
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

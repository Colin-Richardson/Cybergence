<?php
	if(isset($_POST['signup-submit']))
	{
		require 'dbh.inc.php';
		
		$username = $_POST['uid'];		
		$email = $_POST['mail'];
		$password = $_POST['pwd'];
		$passwordRepeat = $_POST['pwd-repeat'];

		if(empty($username) || empty($email) || empty($password) || empty($passwordRepeat) )
		{
			header("location: ../signup.php?error=emptyfields&uid=".$username."&email=".$email);	
			exit();
		}
		elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username))
		{	
			header("location: ../signup.php?error=invalidemail&uid=".$username);	
			exit();

		} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			header("location: ../signup.php?error=invalidemail&uid=".$username);	
			exit();
		
		} elseif (!preg_match("/^[a-zA-Z0-9]*$/", $username))
		{
			header("location: ../signup.php?error=invaliduid&email=".$email);	
			exit();
		
		} elseif ($password !== $passwordRepeat)
		{
			header("location: ../signup.php?error=passwordcheck&uid=".$username."&email=".$email);	
			exit();
			
		} else 
		{

			if (checkRepeat("username", $username))
			{
				header("location: ../signup.php?error=usertaken&mail=".$email);	
				exit();
			} elseif (checkRepeat("email", $email))
			{
				header("location: ../signup.php?error=emailtaken&uid=".$username);	
				exit();
			} else
			{
				$sql = "INSERT INTO Users (username, email, password) VALUES (?, ?, ?)";
				$stmt = mysqli_stmt_init($conn);	
				if (!mysqli_stmt_prepare($stmt, $sql))
				{
					header("location: ../signup.php?error=sqlerror");	
					exit();
				} else
				{
					$hashedPwd = password_hash($password, PASSWORD_DEFAULT);
					mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
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
function checkRepeat($field, $input)
{
	$sql = "SELECT ".$field." FROM Users WHERE ".$field."=?";

	$stmt = mysqli_stmt_init($conn);	
	if (!mysqli_stmt_prepare($stmt, $sql))
	{
		header("location: ../signup.php?error=sqlerror".$field);	
		exit();
	} else
	{
		{
			mysqli_stmt_bind_param($stmt, "s", $input);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			if ( mysqli_stmt_num_rows($stmt) > 0)
			{
				return true;
			}
		}
	}
	return false;
}

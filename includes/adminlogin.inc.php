<?php

	if (isset($_POST['login-submit']))
	{
		require 'dbh.inc.php';
		$mailuid = $_POST['uid'];
		$password = $_POST['pwd'];
		if (empty($mailuid) || empty($password) )
		{
			header("Location: ../adminlogin.php?error=emptyfields");
			exit();
		} else 
		{
			$sql = "SELECT * FROM Admin WHERE username=? OR email=?;";
			$stmt = mysqli_stmt_init($conn);
			if (!mysqli_stmt_prepare($stmt, $sql))
			{		
				header("Location: ../adminlogin.php?error=sqlerror");
				exit();
			} else
			{
				mysqli_stmt_bind_param($stmt,"ss", $mailuid, $mailuid);
				mysqli_stmt_execute($stmt);
				$result = mysqli_stmt_get_result($stmt);
				if ($row = mysqli_fetch_assoc($result))
				{
					$pwdCheck = password_verify($password,$row['password']);
					if ($pwdCheck == false)
					{	
						header("Location: ../adminlogin.php?error=wrongpwd");
						exit();
					} elseif ($pwdCheck == true) 
					{
						session_start();
						$_SESSION['userId'] = $row['id'];
						$_SESSION['userUid'] = $row['user'];
						$_SESSION['admin'] = true;
						if(isset($_POST['redirect']))
						{
							header("Location: ../".$_POST['redirect']."?login=success");
						} else
						{
							header("Location: ../adminlogin.php?login=success'");
						}
						exit();

					}
				} else 
				{
					header("Location: ../adminlogin.php?error=nouser");
					exit();
					
				}
			}
		}

	} else 
	{
		header("Location: ../adminlogin.php");
		exit();
	}


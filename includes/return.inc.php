<?php

function message($key, $val) 
{
	if($key == "error")
	{
		switch ($value)
		{
		case "emptyfields":
			$msg = "There are empty fields";
			$type="error";
			break;
		case "sqlerror":
			$msg = "There was a database error";
			$type="error";
			break;
		case "wrongpwd":
			$msg = "username or password do not exist";
			$type="error";
			break;
		case "nouser":
			$msg = "username or password do not exist";
			$type="error";
			break;
		case "invalidemail":
			$msg = "email is invalid";
			$type="error";
			break;
		case "invaliduid":
			$msg = "username is invalid";
			$type="error";
			break;
		case "passwordcheck":
			$msg = "Passwords don't match";
			$type="error";
			break;
		case "usertaken":
			$msg = "Username is already taken";
			$type="error";
			break;
		case "emailtaken":
			$msg = "Email is already taken";
			$type="error";
			break;
		case "invalidchars":
			$msg = "Invalid characters";
			$type="error";
			break;
		default:
			$msg = "there was an error";
			$type="error";
			break;
		}
	} elseif($key=="login")
	{	
		$msg = "Login successful";
		$type="success";
		
	} elseif($key=="signup")
	{
		$msg = "there was an error";
		$type="error";
	} else {return}
	
		echo '
			<div id="'.$type.'">
				<p>'.$msg.'</p>
			</div>
		';
}






























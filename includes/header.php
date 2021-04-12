<?php
	include 'return.inc.php';
	session_start();
	if(isset($_GET["error"]))
	{
		message("error",$_GET["error"]);		
	} elseif(isset($_GET["login"]))
	{
		message("login",$_GET["login"]);		

	} elseif(isset($_GET["signup"]))
	{
		message("signup",$_GET["signup"]);		

	}

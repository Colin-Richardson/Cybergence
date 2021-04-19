<?php
$url = explode('?', str_replace("/~mahs_mthornton/", "", $_SERVER['REQUEST_URI']))[0];
$titles = [ 
	"" => "Cybergence",
	"index.php" => "Cybergence",
	"mission.php" => "Mission",
	"shop.php" => "Shop",
	"augmented_arms.php" => "Augmented Arms",
	"cyber_contacts.php" => "Cyber Contacts",
	"exosuit.php" => "Exosuit",
	"signup.php" => "Sign up",
	"login.php" => "Login",
];
function meta($input)
{
	switch ($input){
		case "index.php":
			echo "		  	
				<meta name='keywords' content='Technology, Humans, Cybergence, Augmentation, Cyber'>
				<meta name='description' content='Landing Page For Cybergence'>";
		break;

		case "mission.php":
			echo "
				<meta name='keywords' content='Technology, Humans, Cybergence, Augmentation, Cyber, Mission, About'>
				<meta name='description' content='Mission Statement, Values, Ethics, and Team'>";
		break;

		case "shop.php":
			echo "
				<meta name='keywords' content='Augmented Arms, ExoSuit, Cybergence, Cyber Contacts, Cyber, Augmentation, Shop, Products'>
				<meta name='description' content='Our Products'>";
		break;

		case "augmented_arms.php":
			echo "
				<meta name='keywords' content='Augmented Arms, Humans, Cybergence, Augmentation, Arms, Product'>
				<meta name='description' content='Our Augmented Arms Collection'>";
		break;

		case "cyber_contacts.php":
			echo "
				<meta name='keywords' content='Cyber Contacts, Humans, Cybergence, Augmentation, Eyes, Product'>
				<meta name='description' content='Our Cyber Contacts'>";
		break;

		case "exosuit.php":
			echo "
				<meta name='keywords' content='ExoSuit, ExoSkeleton, Exo Skeleton, Humans, Cybergence, Augmentation, Body, Product'>
				<meta name='description' content='Our ExoSuit'>";
		break;

		case "signup.php":
			echo "
				<meta name='keywords' content='Cybergence, Sign Up, Signup'>
				<meta name='description' content='Sign Up with Cybergence'>";
		break;

		case "login.php":
			echo "
				<meta name='keywords' content='Cybergence, Log In, Login'>
				<meta name='description' content='Login with Cybergence'>
				";
		break;
	}
}
?>
<!DOCTYPE html>
<html>

<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

	<?php meta($url)?>
<meta name='author' content='Colin Richardson, Matthew Thornton'>
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<!-- Base Stylesheet -->
	<link rel="stylesheet" href="styles.css">
	<!-- Icon -->
	<link rel="icon" href="img/favicon.png" type="image/x-icon">
	<!-- Title -->
	<title><?php echo $titles[$url]; ?></title>
	<?php
		if($url == "mission.php")
		{
			echo '<!-- Jquery -->
			      <script src="js/jquery-3.5.1.min.js"></script>';
		}
	?>
</head>



<?php
	session_start();
	if ($url == "index.php" || $url == "")
	{
		echo "<body class='index'>";
		require "includes/navbar.php";
	} elseif ($url == "mission.php")
	{
		echo "<body>";
		require "includes/navbar.php";
	} else
	{
		echo "<body>";
		if ($url == "cyber_contacts.php")
		{
			echo '<div class="productback eyeback">';
		} elseif ($url == "augmented_arms.php")
		{
			echo '<div class="productback armback">';
		} elseif ($url == "exosuit.php")
		{
			echo '<div class="productback exoback">';
		}
		require "includes/shopnav.php";
	}
	
	include 'return.inc.php';
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

<?php
$url = str_replace("/~mahs_mthornton/", "", $_SERVER['REQUEST_URI']);
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
?>
 <!DOCTYPE html>
  <html>
  
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="keywords" content="Mssion, About, Cybergence, Augmentation, Implant, Cyber" />
      <meta name="description" content="Mission Statement, Values, Ethics" />
      <meta name="author" content="Colin Richardson, Matthew Thornton, and Vincent Zhu" />
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

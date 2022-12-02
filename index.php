<?php
		   session_start();
		   if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
			header("location: home.php");
			exit;
		}
?>

<!DOCTYPE html>
<html lang="en">

	<head>
		<title>aClock - Useless clock thing</title>
		<script defer src='app.js'></script>
		<link rel='stylesheet' href='style.css'></link>
		<link rel="shortcut icon" href="icons/logo.png" type="image/x-icon"></link>
		<meta charset="UTF-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
   		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		   
	</head>


	<body>
		<nav>
			<a href="index.php"><img src="icons/logo.png" alt="logo" height="50" width="50"></img></a>
			<div class='links'>
				<a href="login.php"><img src='icons/login_icon.png' alt='login' height="50" width="50"></a>
			</div>
		</nav>

		<section class='hidden'>
			<img src="icons/logo.png" height="100" width="100"></img>
			<h1>Just a clock</h1>
			<h5>Made by a person somewhere doing something.....</h5>
			


		</section>
		<section class='hidden'>
			<h1>Its as easy as</h1>
			<div class='ab'>
				<div class='ac hidden'>
				<h4>1. Click +</h4>
				</div><br><div class='ac hidden'>
				<h4>2. Add information</h4>
				</div><br><div class='ac hidden'>
				<h4>3. Click Save</h4>
				</div>
			</div>
			
		</section>
	</body>

</html>

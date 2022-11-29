<html>

	<head>
		<title>aClock - My Home</title>
		<script defer src='script.js'></script>
		<link rel='stylesheet' href='style.css'></link>
		<link rel="shortcut icon" href="icons/logo.png" type="image/x-icon"></link>
		<script defer src="time.js"></script>
	</head>


	<body>
		<nav>
			<a href="home.php"><img src="icons/logo.png" alt="logo" height="50" width="50"></img></a>
			<p id="demo" class="isBlack"></p>
			<div class='links'>
				<a onclick="confLogout()"><img src='icons/logout_icon.png' alt='logout' height="50" width="50"></a>
			</div>
		</nav>

		<a href="new-reminder.php"><img src='icons/add.png' width="100" height="100"></img></a>
		<?php
			require_once "connect.php";
			session_start();

			$username = $_SESSION['username'];
			$sql = "SELECT `name`, `time-start`, `time-end` FROM `reminders` WHERE username = '$username';";

			while ($row = mysqli_fetch_array(mysqli_query($conn, $sql))){


			
				echo $row["name"];
			}
				//echo $row["time-start"];



		?>
		


	</body>

</html>
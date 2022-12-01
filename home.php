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

		
		<?php
			require_once "connect.php";
			session_start();

			$username = $_SESSION['username'];
			$sql = "SELECT `name`, `time-start`, `time-end`, `comments` FROM `reminders` WHERE username = '$username' AND completed = '0';";

			$result = mysqli_query($conn, $sql);

			while($row = mysqli_fetch_assoc($result)) {
				// var_dump($row);
				$rem = $row['name'];
				echo "<div class='reminder'>" . $row['name'] . "<br>" . $row['time-start'] . " - " . $row['time-end'] . "<br>" . $row['comments'] . "<br><a href='del.php?rem=$rem'><img src='icons/delete_icon.png' width='20' height='20'></a><a href='completed.php?rem=$rem'><img src='icons/completed.png' width='20' height='20'></a>" . "</div>" . "<br>";
			}

		?>

<a href="new-reminder.php"><img src='icons/add.png' width="100" height="100"></img></a>
		


	</body>

</html>
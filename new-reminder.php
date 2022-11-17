<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Reminder</title>
    <link rel='stylesheet' href='style.css'></link>
</head>
<body>
<nav>
			<a href="home.php"><img src="icons/back.png" alt="back" height="50" width="50"></img></a>
			
		</nav>
    <div class="login">		
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h2>Create a new reminder</h2>
        <label>Name:</label>
        <input type="Text" placeholder="Name" id='name'></input>
        <br>
        <label>Start Time:</label>
        <input type='datetime-local' id='time-start'></input>
        <br>
        <label>End Time:</label>
        <input type='datetime-local' id='time-end'></input>
        <br>
        <a onclick="this.closest('form').submit();return false;"><img src="icons/save_icon.png" width="50" height="50"></img></a>
    </form>
</div>
</body>
</html>
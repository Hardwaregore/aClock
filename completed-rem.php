<?php
		   session_start();
		   if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                $useless = 'useless';
		} else {
            header('Location: home.php');
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='style.css'></link>
    <link rel="shortcut icon" href="icons/completed.png" type="image/x-icon"></link>
    <title>Completed reminders</title>
</head>
<body>
    <div class='login'>
    <?php
    
        			require_once "connect.php";
                    
        
        
                    $username = $_SESSION['username'];
                    $sql = "SELECT `name`, `time-start`, `time-end`, `comments` FROM `reminders` WHERE username = '$username' AND completed = '1';";
        
                    $result = mysqli_query($conn, $sql);
        
                    while($row = mysqli_fetch_assoc($result)) {
                        // var_dump($row);
                        $rem = $row['name'];
                        echo "<div class='reminder'>" . $row['name'] . "<br>" . $row['time-start'] . " - " . $row['time-end'] . "<br>" . $row['comments'] . "<br><a href='del.php?rem=$rem'><img src='icons/delete_icon.png' width='20' height='20'></a>" . "</div>" . "<br>";
                    }
        
    ?>
    <a href="home.php"><img src='icons/back.png' width="60" height="60"></img></a>    
</div>
    
</body>
</html>
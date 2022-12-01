<?php 

require_once("connect.php");
session_start();
$username = $_SESSION['username'];

    if(empty(trim($_POST["name"]))){
        $err = "Please set a name";

    } elseif(!preg_match('/^[a-zA-Z0-9_ ]+$/', trim($_POST["name"]))){
        $err = "Plz no squeal injection.....";
    } else{
        $name = trim($_POST["name"]);
    }

    if(empty(trim($_POST["time-start"]))){
        $err = "Please set a start time";

    } else{
        $start = trim($_POST["time-start"]);

    }

    if(!empty(trim($_POST["time-end"]))){
        $end = trim($_POST["time-end"]);

    } 
    if(!empty(trim($_POST["comments"]))){
        $comments = trim($_POST["comments"]);

    } 


    if (!isset($err)) {

        $sql = "INSERT INTO `reminders` (`username`, `name`, `time-start`, `time-end`, `comments`) VALUES ('$username', '$name', '$start', '$end', '$comments');";


    if(mysqli_query($conn, $sql)){
        // Redirect to login page
        header("location: home.php");
    } else{
        header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);

    }
    } else {
        header("Location: new-reminder.php?err=$err");
    }


?>
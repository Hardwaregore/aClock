<?php 

require_once("connect.php");
session_start();
$username = $_SESSION['username'];

    if(empty(trim($_POST["name"]))){
        $err = "Please set a name";
        die();
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["name"]))){
        $err = "Plz no squeal injection.....";
    } else{
        $name = trim($_POST["name"]);
    }

    if(empty(trim($_POST["time-start"]))){
        $err = "Please set a start time";
        die();
    } else{
        $start = trim($_POST["time-start"]);

    }

    if(!empty(trim($_POST["time-start"]))){
        $end = trim($_POST["time-end"]);

    } 
    if (!isset($err)) {

    if(mysqli_query($conn, "INSERT INTO reminders (username, name, time-start, time-end) VALUES ('$username', '$name', 'time-start', 'time-end')")){
        // Redirect to login page
        header("location: home.php");
    } else{
        header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
    }
    }


?>
<?php

session_start();

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    $useless = 'useless';
} else {
header('Location: home.php');
}


require_once "connect.php";
$rem = $_GET['rem'];
$sql = "UPDATE `reminders` SET completed = 0 WHERE name = '$rem';";
$result = mysqli_query($conn, $sql);
header('Location: home.php');
?>
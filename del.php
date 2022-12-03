<?php



		   session_start();


        $username = $_SESSION['username'];

require_once "connect.php";
$rem = $_GET['rem'];
$sql = "DELETE FROM `reminders` WHERE name = '$rem' AND username = '$username';";
$result = mysqli_query($conn, $sql);
header('Location: home.php');
?>
<?php
require_once "connect.php";
$rem = $_GET['rem'];
$sql = "UPDATE `reminders` SET completed = 1 WHERE name = '$rem';";
$result = mysqli_query($conn, $sql);
header('Location: home.php');
?>
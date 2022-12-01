<?php
require_once "connect.php";
$rem = $_GET['rem'];
$sql = "DELETE FROM `reminders` WHERE name = '$rem';";
$result = mysqli_query($conn, $sql);
header('Location: home.php');
?>
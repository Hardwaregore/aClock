<?php



		   session_start();

           if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
            $useless = 'useless';
    } else {
        header('Location: home.php');
    }



require_once "connect.php";
$rem = $_GET['rem'];
$sql = "DELETE FROM `reminders` WHERE name = '$rem';";
$result = mysqli_query($conn, $sql);
header('Location: home.php');
?>
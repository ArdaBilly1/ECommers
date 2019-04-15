<?php
    include '../function/config.php';

    session_start();

    if($_SESSION['status'] != "login"){
        header("location:../index.php");
    }

    echo "Hai, " . $_SESSION['username'] . ". Ini adalah HOME PAGE";

?>

<br>
<br>
<a href="logout.php">LOGOUT</a>
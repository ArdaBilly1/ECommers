<?php
include 'config.php';

$username = $_POST['username'];
$password = $_POST['password'];

$q      = mysqli_query($konek , "SELECT * FROM user WHERE username='$username' AND password='$password'");
$cek    = mysqli_fetch_array($q, MYSQLI_ASSOC);

if($cek > 0) {
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['status']   = "login";
    header("location:../User/indexU.php");
} else {
    echo "<script text/javascript>alert('Username atau Password salah!');
            window.location='../index.php';</script>";
}

?>
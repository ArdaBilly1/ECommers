<?php
include "config.php";

    $name     = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql    = "SELECT * FROM user WHERE username = '$username'";
    $q      = $konek->query($sql);
    if($q->num_rows != 0){
        echo "<script text/javascript> alert('Username sudah terdaftar!');
                window.location='../register.php';</script>";
        
    } else {
        $data = "INSERT INTO user VALUES (NULL, '$name','$username','$password')";
        $save = $konek->query($data);
        if($save) {
            echo "<script text/javascript> alert('Pendaftaran sukses!');
                    window.location='../index.php';</script>";
        } else {
            echo "<script text/javascript> alert('Pendaftaran gagal!');
                    window.location='../index.php';</script>";
        }
    }
?>
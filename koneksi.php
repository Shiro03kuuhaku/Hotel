<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $db_name = "hotel";

    $conn = mysqli_connect($server, $username, $password, $db_name);

    if(!$conn){
        die("koneksi gagal". mysqli_connect_error);
    }
?>
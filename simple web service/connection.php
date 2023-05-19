<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "tugas2_sister";

    $connection = mysqli_connect($servername, $username, $password, $databasename);
    if(!$connection) {
        die("Gagal terkoneksi!");
    }
?>
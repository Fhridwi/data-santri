<?php

    $servername = "localhost";
    $username = "root";
    $dbPassword = ""; 
    $dbname = "data_santri"; 

    $conn = new mysqli($servername, $username, $dbPassword, $dbname);

    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }
?>

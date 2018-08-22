<?php
    $DBServer = "localhost";
    $DBUsername = "root";
    $DBPassword = "";
    $DBName = "PHP-Photo-Sharing-App-1";

    $conn = mysqli_connect($DBServer, $DBUsername, $DBPassword, $DBName);

    if (!$conn) {
        die("Connection failed:" . mysqli_connect_error());
    }
?>
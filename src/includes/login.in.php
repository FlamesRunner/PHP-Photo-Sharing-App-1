<?php

    if (!isset($_SESSION)) {
        session_start();
    }

    if (isset($_POST['login-submit'])) {

        include_once 'db.in.php';

        $username = mysqli_real_escape_string($_POST['login-username']);
        $password = mysqli_real_escape_string($_POST['login-password']);

        // Error Handlers

        if (empty($username) || empty($password)) {
            header("Location: ../../index.php?status=login%login=empty");
            exit();
        } else {
            
        }

    } else {
        header("Location: ../../index.php");
        exit();
    }

?>
<?php
    if (isset($_POST['signup-submit'])) {
        include_once 'db.in.php';
        $username = strip_tags(mysqli_real_escape_string($_POST['signup-username']));
        $password = strip_tags(mysqli_real_escape_string($_POST['signup-password']));
        $email = strip_tags(mysqli_real_escape_string($_POST['signup-email']));
        // error handlers
        if (empty($username) || empty($password) || empty($email)) {
            header('Location: ../../index.php?status=signup&signup=empty');
            exit();
        } else {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                header('Location: ../../index.php?status=signup&signup=email');
                exit();
            } else {
                $usernameCheck = "SELECT username FROM users WHERE username='$username'";
                $usernameCheckResult = mysqli_query($conn, $usernameCheck);
                $usernameCheckResultCheck = mysqli_num_rows($usernameCheckResult);
                if ($usernameCheckResultCheck > 0) {
                    header('Location: ../../index.php?status=signup&signup=username');
                    exit();
                } else if ($usernameCheckResultCheck == 0) {
                    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                    $insertUser = "INSERT INTO users (username, password, email) VALUES ($username, $hashedPassword, $email)";
                    if (mysqli_query($insertUser)) {
                        header('Location: ../../index.php?status=signup&signup=success');
                        exit();
                    } else {
                        header('Location: ../../index.php?status=signup&signup=error');
                        exit();
                    }
                }
            }
        }
    } else {
        header('Location: ../../index.php');
        exit();
    }
?>
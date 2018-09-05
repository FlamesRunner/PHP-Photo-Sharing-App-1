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
            header("Location: ../../index.php?status=login&login=empty");
            exit();
        } else {
            $userCheck = "SELECT * FROM users WHERE username='$username'";
            $userCheckResult = mysqli_query($conn, $userCheck);
            $userCheckResultCheck = mysqli_num_rows($userCheckResult);
            if ($userCheckResultCheck > 0) {
                $userCheckRow = mysqli_fetch_assoc($userCheckResult);
                if ($userCheckRow) {
                    $dehashedPassword = password_verify($password, $userCheckRow['password']);
                    if (!$dehashedPassword) {
                        header("Location: ../../index.php?status=login&login=password");
                        exit();
                    } else if ($dehashedPassword){
                        $_SESSION['username'] = $userCheckRow['username'];
                        header("Location: ../../index.php?status=login&login=success");
                        exit();
                    } else {
                        header("Location: ../../index.php?status=login&login=error");
                        exit();
                    }
                }
            } else if ($userCheckResultCheck == 0) {
                header("Location: ../../index.php?status=login&login=no-user");
                exit();
            }
        }
    } else {
        header("Location: ../../index.php");
        exit();
    }
?>
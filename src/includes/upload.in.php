<?php
    if (isset($_POST['upload-submit'])) {
        if (isset($_SESSION['username'])) {
            require_once 'db.in.php';
            $fileText = $_POST['upload-text'];
            $file = $_FILES['file'];
            $fileName = $file['name'];
            $fileType = $file['type'];
            $fileSize = $file['size'];
            $fileError = $file['error'];
            $fileTmpName = $file['tmp_name'];
            $fileExtension = explode('.', $fileName);
            $fileActualExtension = strtolower(end($fileExtension));
            $allowedFileTypes = array('jpg', 'jpeg', 'png', 'gif');
            if (!in_array($fileActualExtension, $allowedFileTypes)) {
                header("Location: ../../index.php?status=add&add=upload-type");
                exit();
            } else {
                if ($fileError != 0) {
                    header("Location: ../../index.php?status=add&add=upload-file-error");
                    exit();
                } else {
                    if ($fileSize > 1000000) {
                        header("Location: ../../index.php?status=add&add=upload-size");
                        exit();
                    } else {
                        $fileId = str_replace('.', rand(1, 9), uniqid($_SESSION['username'], true));
                        $fileNewName = $fileId . '.' . $fileActualExtension;
                        $fileURL = '../app_data/user/' . $_SESSION['username'] . '/' . $fileNameNew;
                        if (move_uploaded_file($fileTmpName, $fileNewName) != false) {
                            $created = date("y m d h:i:s");
                            $year = date("y");
                            $month = date("m");
                            $day = date("d");
                            $hour = date("h");
                            $minute = date("i");
                            $second = date("s");
                            $fileUpload = "INSERT INTO photos (username, id, text, url, created, year, month, day, hour, minute, second) 
                            VALUES (" . $_SESSION['username'] . ", $fileId, $text, $fileURL, $year, $month, $day, $hour, $minute, $second)";
                            $fileUploadResult = mysqli_query($fileUpload);
                            if ($fileUploadResult) {
                                header("Location: ../../index.php?status=add&add=upload-success");
                            } else {
                                header("Location: ../../index.php?status=add&add=upload-error");
                                exit();
                            }
                        } else {
                            header("Location: ../../index.php?status=add&add=upload-destination-error");
                            exit();
                        }
                    }
                }
            }
        } else{
            header("Location: ../../index.php?status=add&add=not-logged-in");
            exit();
        }
    } else if (isset($_POST['profile-pic-submit'])) {

    } else {
        header("Location: ../../index.php");
        exit();
    }
?>
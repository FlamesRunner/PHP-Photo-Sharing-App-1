<?php
    if (!isset($_SESSION)) {
        session_start();
    }
    require_once 'src/includes/db.in.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Photo Sharing app</title>
        <link href="src/scripts/css/main.css" type="rel/stylesheet">
    </head>
    <body>
        <div id="top">
            <div id="menu">
                <i class="fa fa-bars" style="color:white; font-size:25px;"></i>
            </div>
            <div id="search">
                <input id="search-bar" name="search-bar" placeholder="People, Places, Topics...">
            </div>
            <h1 id="top-title">PHP Photo Sharing App</h1>
            <div id="user">
                <?php if (!isset($_SESSION['username'])) { ?>
                    <button id="login-button">Login</button>
                    <button id="signup-button">Signup</button>
                <?php } else if (isset($_SESSION['username'])) { ?>
                    <a href="index.php?status=profile%id=<?= $_SESSION['username'] ?>" id="top-username">
                        <?php echo $_SESSION['username'];?>
                    </a>
                    <?php 
                        $profilePic = "SELECT profile_pic FROM users WHERE username=" . "'" . $_SESSION['username'] . "'";
                        $profilePicResult = mysqli_query($conn, $profilePic);
                        $profilePicResultCheck = mysqli_num_rows($profilePicResult);
                    ?>
                    <?php if ($profilePicResultCheck > 0) { ?>
                        <img id="profile-pic" src="src/app_data/user/<?= $profilePic ?>"></img>
                    <?php } else if ($profilePicResultCheck < 1) { ?>
                        <img id="profile-pic" src="src/images/default-profile-pic.jpg"></img>
                    <?php } ?>
                    <button id="user-dropdown" onclick="openUserDropdown"><!-- Logout and other options --></button>
                <?php } ?>
            </div>
        </div>
        
        <?php if (isset($_GET['status'])) { ?>
            <div id="status">
                <?php include_once 'src/components/status/status-' . $_GET['status'] . '.php'; ?>
            </div>
        <?php } ?>

        <div id="menu" style="display:none">
            <div id="menu-header">
                <a href="index.php"><i class="fa fa-home" style="color:white; font-size:25px;"></i></a>
                <a href="index.php?status=settings"><i class="fa fa-gear" style="color:white; font-size:25px;"></i></a>
            </div>
            <div class="menu-item">
                <a href="index.php?status=trending">Trending</a>
            </div>
            <div class="menu-item">
                <a href="index.php?status=recommended">Recomended</a>
            </div>
            <div class="menu-item">
                <a href="index.php?status=promote">Promote</a>
            </div>
            <div class="menu-item">
                <a href="index.php?status=about">About</a>
            </div>
        </div>

        <div id="main">
            <div id="home">
                <div class="home-banner">

                </div>
                <div class="home-banner">
                
                </div>
                <div class="home-banner">
                
                </div>
            </div>

            <div id="posts">
                <div id="post-list">

                </div>
                <div id="following">

                </div>
            </div>
        </div>

        <div id="bottom">
            <?php require_once 'src/components/bottom.php'; ?>
        </div>
    </body>
</html>
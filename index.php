<?php
    if (!isset($_SESSION)) {
        session_start();
    }
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
            <div id="login-signup">
                <?php if (!isset($_SESSION['username'])) { ?>
                    <button id="login-button">Login</button>
                    <button id="signup-button">Signup</button>
                <?php } else if (isset($_SESSION['username'])) { ?>
                    <a href="index.php?status=profile%id=<?= $_SESSION['username'] ?>" id="top-username">
                        <?php echo $_SESSION['username'];?>
                    </a>
                    <?php $topFileExtension = "SELECT profile_pic_ext FROM users WHERE username=" . $_SESSION['username']; ?>
                    <img src="src/app_data/user/<?= $_SESSION['username'] ?>/<?= $_SESSION['username'] ?>-profile.<?= $topFileExtension ?>"></img>
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
                <i class="fa fa-home" style="color:white; font-size:25px;"></i>
                <i class="fa fa-gear" style="color:white; font-size:25px;"></i>
            </div>
            <div class="menu-item">
                <p>Trending</p>
            </div>
            <div class="menu-item">
                <p>Recomended</p>
            </div>
            <div class="menu-item">
                <p>Promote</p>
            </div>
            <div class="menu-item">
                <p>About</p>
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
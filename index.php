<?php
    session_start();
    require_once 'src/includes/db.in.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Photo Sharing app</title>
        <?php require_once 'src/components/head.php'; ?>
    </head>
    <body onload="onLoad()">
        <div id="top">
            <div id="top-menu">
                <i class="fa fa-bars" style="color:white; font-size:25px;"></i>
            </div>
            <div id="search">
                <input id="search-bar" name="search-bar" placeholder="People, Places, Topics...">
                <?php require_once 'src/scripts/php/top-search.php'; ?>
            </div>
            <h1 id="top-title"><a href="index.php">PHP Photo Sharing App</a></h1>
            <div id="user">
                <?php require_once 'src/scripts/php/top-user.php'; ?>
            </div>
        </div>
        
        <?php if (isset($_GET['status'])) { ?>
            <div id="status">
                <div id="status-header">
                    
                </div>
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
                <a href="index.php?status=recommended">Recommended</a>
            </div>
            <div class="menu-item">
                <a href="index.php?status=promote">Promote</a>
            </div>
            <div class="menu-item">
                <a href="index.php?status=about">About</a>
            </div>
        </div>

        <div id="main-scroll">
            <p id="main-scroll-text">&rarr</p>
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
                <div class="posts-right" id="following">

                </div>
                <div class="posts-right" id="recommended">

                </div>
                <div class="posts-right" id="trending">

                </div>
                <div class="posts-right block-ad">

                </div>
            </div>
        </div>

        <div id="bottom">
            <?php include_once 'src/components/bottom.php'; ?>
        </div>
    </body>
</html>
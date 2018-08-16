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
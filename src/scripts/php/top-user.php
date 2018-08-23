<?php if (!isset($_SESSION['username'])): ?>
    <a id="login-button" href="index.php?status=login">Log in</a>
    <a id="signup-button" href="index.php?status=signup">Sign up</a>
<?php elseif (isset($_SESSION['username'])): ?>
    <a href="index.php?status=profile%id=<?= $_SESSION['username'] ?>" id="top-username">
        <?php echo $_SESSION['username'];?>
    </a>
    <?php 
        $profilePic = "SELECT profile_pic FROM users WHERE username=" . "'" . $_SESSION['username'] . "'";
        $profilePicResult = mysqli_query($conn, $profilePic);
        $profilePicResultCheck = mysqli_num_rows($profilePicResult);
    ?>
    <?php if ($profilePicResultCheck > 0): ?>
        <img id="profile-pic" src="src/app_data/user/<?= $profilePicResult ?>"></img>
    <?php elseif ($profilePicResultCheck < 1): ?>
        <img id="profile-pic" src="src/images/default-profile-pic.jpg"></img>
    <?php endif; ?>
    <button id="user-dropdown" onclick="openUserDropdown"><!-- Logout and other options --></button>
<?php endif; ?>
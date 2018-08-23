<div id="profile-header">
    <?php
        if ($_GET['id'] == $_SESSION['username']) {
            // Allow the user to edit his own profile, replace profile pic, etc.
        } else {
            // Allow hte viewer to look through the photos and write comments.
        }
    ?>
</div>
<div id="photo-bar">
    <button class="photo-bar-button"></button>
</div>
<div id="photos">
    <?php
        $photoQuantity = "SELECT * FROM pictures WHERE username=" . "'" . $_GET['username'] . "'" ; 
        $photoQuantityResult = mysqli_query($conn, $photoQuantity);
        $photoQuantityResultCheck = mysqli_num_rows($photoQuantityResult);
        $photoRow = mysqli_fetch_assoc($photoQuantityResultCheck);
        function imageSortFunction($a, $b) {
            return strtotime($a['created']) - strtotime($b['created']);
        }
        // Create a multidimensional array of the user's photos and match them to their URL from the database.
        $photos = array();
        for ($id = 0; $id <= $photoQuantityResultCheck; $i++) {
            $photos[$id] = array($photoRow['created'], $photoRow['text'], $photoRow['url']);
        }
        usort($photos, 'imageSortFunction');
    ?>
    <div class="photo-collage">

    </div>
    <div class="photo-list">
        <?php if ($photoQuantityResultCheck > 0): ?>
            <?php for ($i = 0; $i <= $photoQuantityResultCheck; $i++): ?>
                <img class="photo-list" href="<?= $photos[$i]['url'] ?>"></img>
            <?php endfor; ?>
        <?php elseif ($photoQuantityResultCheck == 0): ?>
            <style>
                #no-photos {
                    display: inline;
                }
            </style>
        <?php endif; ?>
    </div>
    <p id="no-photos" style="display:none;">There are no posts from this user yet</p>
</div>
<div id="profile-header">

</div>
<div id="photos">
    <div class="photo-collage">

    </div>
    <div class="photo-list">
        <?php 
            $photoQuantity = "SELECT Photo_quantity FROM users WHERE user_id=" . "'" . $_GET['username'] . "'" ; 
            
            $photoQuantityResult = mysqli_query($conn, $photoQuantity);
            $photoQuantityResultCheck = mysqli_num_rows($photoQuantityResult);

            function findImage($number) {
                // Create an array of the users photos and match them to an id from the database.
            }
            if ($photoQuantity > 0) {
                for ($i = 0; $i <= $photoQuantity; $i++) {
                    echo '<img href=""></img>';
                }
            } else if ($photoQuantity == 0) {
                echo '
                <style>
                    #no-photos {
                        display: inline;
                    }
                </style>
                ';
            }
        ?>
        <p id="no-photos" style="display:none;">There are no posts from this user yet</p>
    </div>
</div>
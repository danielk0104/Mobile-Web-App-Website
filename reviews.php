<?php 
    include "includes/head_fragment.php";
    include 'includes/nav_fragment.php';
    include 'includes/review_filter_fragment.php';
?>
<!DOCTYPE html>
<html lang="en">
    <?php 
        $title = "Reviews";
        echo head_fragment($title);
    ?>
    <body>
        <main>
            <?php
                echo nav_fragment();
            ?>
            <h1>Reviews</h1>
            <p>Read some reviews from our users.</p>
            <?php
                echo filter_fragment();
            ?>
            <div id="app"></div>
            <script src="js/app.js"></script>
        </main>
    </body>
</html>
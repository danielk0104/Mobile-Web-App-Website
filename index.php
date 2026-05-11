<?php 
    include "includes/head_fragment.php";
    include 'includes/nav_fragment.php';
    include 'includes/header_fragment.php';
?>
<!DOCTYPE html>
<html lan="en">
    <?php 
        $title = "Home";
        echo head_fragment($title);
    ?>
    <body>
        <?php
            echo nav_fragment();
            echo header_fragment();
        ?>
        <h1>Home</h1>
        <h2>This is a website.</h2>
    </body>
</html>
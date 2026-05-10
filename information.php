<?php 
    include "includes/head_fragment.php";
    include 'includes/nav_fragment.php';
    include 'includes/header_fragment.php';
?>
<!DOCTYPE html>
<html lan="en">
    <?php 
        $title = "Information";
        echo head_fragment($title);
    ?>
    <body>
        <?php
            echo nav_fragment();
            echo header_fragment();
        ?>
        <h1>Information</h1>
        <p>This is a website.</p>
    </body>
</html>
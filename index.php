<?php 
    include "includes/head_fragment.php";
    include 'includes/nav_fragment.php';
?>
<!DOCTYPE html>
<html lan="en">
    <?php 
        $title = "Home";
        echo head_fragment($title);
    ?>
    <body>
        <main>
            <?php
                echo nav_fragment();
            ?>
            <div class="container">
                <img class="logo" src="assets/logo.svg" alt="App logo">
                <h3>Consil</h3>
            </div>
            <h1>The only productivity app you'll need.</h1>
            <p>Consil is the all-in-one app for students.</p>
            <button>Get Started</button>
            <div class="container">
                <img class="left" src="assets/home.png" alt="Screenshot of the app's home page">
                <div>
                    <h2>Productivity when it counts</h2>
                    <p>Consil's range of funtions support students to self-study. Trust Consil to keep you on track.</p>
                </div>
            </div>
            <div class="container">
                <div>
                    <h2>Motivation that matters</h2>
                    <p>Consil supports students' studying in a range of ways, using well-known techniques—journalling, to-do lists, the pomodoro technique.</p>
                </div>
                <img class="right" src="assets/timer.png" alt="Screenshot of the app's timer">
            </div>
        </main>
    </body>
</html>
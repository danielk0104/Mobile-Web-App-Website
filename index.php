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
                <h4>Consil</h4>
            </div>
            <h1>The only productivity app you'll need.</h1>
            <p>Consil is the all-in-one app for students.</p>
            <a href="https://w24011169.nuwebspace.co.uk/KV5049/assessment/webapp/">
                <button>Get Started</button>
            </a>
            <div class="container">
                <img class="left" src="assets/home.png" alt="Screenshot of the app's home page">
                <div>
                    <h2>Productivity when it counts</h2>
                    <p>Consil's range of funtions support students to self-study. Trust Consil to keep you on track.</p>
                    <div class="container">
                        <div class="info-box-small">
                            <h3>To-Do List</h3>
                            <p>To-do lists are effective tools for time management.</p>
                            <a href="information.php">
                                <button>Read More</button>
                            </a>
                        </div>
                        <div class="info-box-small">
                            <h3>Journalling</h3>
                            <p>Journalling is useful for keeping your thoughts in order.</p>
                            <a href="information.php">
                                <button>Read More</button>
                            </a>
                        </div>
                        <div class="info-box-small">
                            <h3>Timer</h3>
                            <p>A timer is useful for pacing youself and focusing your mind.</p>
                            <a href="information.php">
                                <button>Read More</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div>
                    <h2>Motivation that matters</h2>
                    <p>Consil supports students' studying in a range of ways, using well-known techniques—journalling, to-do lists, the pomodoro technique.</p>
                    <div class="container">
                        <div class="info-box">
                            <h3>Trusted by students</h3>
                            <p>Consil is trusted by students all over the world. Read what our users have to say for youself.</p>
                            <a href="reviews.php">
                                <button>Read the Reviews</button>
                            </a>
                        </div>
                    </div>
                </div>
                <img class="right" src="assets/timer.png" alt="Screenshot of the app's timer">
            </div>
        </main>
    </body>
</html>
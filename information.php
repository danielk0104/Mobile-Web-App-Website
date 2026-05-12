<?php 
    include "includes/head_fragment.php";
    include 'includes/nav_fragment.php';
?>
<!DOCTYPE html>
<html lang="en">
    <?php 
        $title = "Information";
        echo head_fragment($title);
    ?>
    <body>
        <main>
            <?php
                echo nav_fragment();
            ?>
            <h1>Information</h1>
            <p>Advice for students using Consil.</p>
            <div class="container">
                <img class="left" src="assets/journal.png" alt="Screenshot of the app's journal">
                <div>
                    <h2>Journalling</h2>
                    <p>Journalling is useful for keeping your thoughts in order. Use the journal to record your thoughts, create a plan and organise information.</p>
                    <p>Using a journal is proven to reduce stress.</p>
                    <div class="container">
                        <div class="info-box">
                            <h3>Try out the Journal</h3>
                            <p>Get de-stressed now.</p>
                            <a href="https://w24011169.nuwebspace.co.uk/KV5049/assessment/webapp/journal" class="button" role="button">Try it out</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div>
                    <h2>To-Do List</h2>
                    <p>To-do lists are effective tools for time management. Use the to-do list to set goals and keep track of your progress.</p>
                    <div class="container">
                        <div class="info-box">
                            <h3>Try out To-Do Lists</h3>
                            <p>Start organising today.</p>
                            <a href="https://w24011169.nuwebspace.co.uk/KV5049/assessment/webapp/to-do" class="button" role="button">Try it out</a>
                        </div>
                    </div>
                </div>
                <img class="right" src="assets/todo.png" alt="Screenshot of the app's to-do list">
            </div>
            <div class="container">
                <img class="left" src="assets/timer.png" alt="Screenshot of the app's timer">
                <div>
                    <h2>Timer</h2>
                    <p>A timer is useful for pacing youself, taking regular breaks and focusing your mind.</p>
                    <p>Consil's timer functionality is built with time management methods such as the pomodoro technique in mind.</p>
                    <div class="container">
                        <div class="info-box">
                            <h3>Try out the Timer</h3>
                            <p>Focus on what's important.</p>
                            <a href="https://w24011169.nuwebspace.co.uk/KV5049/assessment/webapp/timer" class="button" role="button">Try it out</a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
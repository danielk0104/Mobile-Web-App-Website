<?php

function nav_fragment() {
    return <<<EOT
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="information.php">Information</a></li>
                <li><a href="reviews.php">Reviews</a></li>
            </ul>
        </nav>
    EOT;
}
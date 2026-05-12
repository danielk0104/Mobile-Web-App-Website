<?php

function filter_fragment() {
    return <<<EOT
        <div class="filters">
            <nav>
                <ul>
                    <li id="All">All Ratings</li>
                    <li id="5">5 Stars</li>
                    <li id="4">4 Stars</li>
                    <li id="3">3 Stars</li>
                    <li id="2">2 Stars</li>
                    <li id="1">1 Stars</li>
                </ul>
            </nav>
        </div>
    EOT;
}
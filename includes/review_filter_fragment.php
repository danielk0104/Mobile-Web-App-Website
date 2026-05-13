<?php

function filter_fragment() {
    return <<<EOT
        <h2>Filter Reviews</h2>
        <div class="filters">
            <nav>
                <ul>
                    <li id="All" tabindex="0" role="button">All Ratings</li>
                    <li id="5" tabindex="0" role="button">5 Stars</li>
                    <li id="4" tabindex="0" role="button">4 Stars</li>
                    <li id="3" tabindex="0" role="button">3 Stars</li>
                    <li id="2" tabindex="0" role="button">2 Stars</li>
                    <li id="1" tabindex="0" role="button">1 Stars</li>
                </ul>
            </nav>
        </div>
    EOT;
}
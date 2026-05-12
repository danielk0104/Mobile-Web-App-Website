<?php

function filter_fragment() {
    return <<<EOT
        <nav>
            <ul>
                <li id="All">All</li>
                <li id="5">5 Stars</li>
                <li id="4">4 Stars</li>
                <li id="3">3 Stars</li>
                <li id="2">2 Stars</li>
                <li id="1">1 Stars</li>
            </ul>
        </nav>
    EOT;
}
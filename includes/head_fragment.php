<?php

function head_fragment($title) {
    return <<<EOT
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>
                $title — Consil
            </title>
            <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
            <link href="css/styles.css" rel="stylesheet">
        </head>
    EOT;
}
<?php

/**
 * Index file for the projects directory. Redirects to the desired page.
 * Author   : louis.richard@tutanota.com
 * Project  : louisrichard.github.io / richard486.ch
 * Created  : JAN. 22 2024
 * Info     : This file has been adapted from another project : https://github.com/LouisRichard/tpi-news-website/
 *
 * Source       :   https://github.com/LouisRichard/louisrichard.github.io
 */

if (isset($_GET['p'])) {
    $project = $_GET['p'];

    switch ($project) {
        case 'gamelib':
            require_once "view/gamelib.php";
        default:
            header('location: ../error.html');
    }
} else {
    header('location: error.html');
}
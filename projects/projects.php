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
        // Individual projects
        case 'gamelib':
            require_once "view/gamelib.php";
            break;
        case 'githubio':
            require_once "view/githubio.php";
            break;
        case 'awsscheduler':
            require_once "view/awsscheduler.php";
            break;
        case 'numericdice':
            require_once "view/numericdice.php";
            break;
        case 'codeabbey':
            require_once "view/codeabbey.php";
            break;
        case 'hackerrank':
            require_once "view/hackerrank.php";
            break;
        case 'rootme':
            require_once "view/rootme.php";
            break;
        case 'dwm':
            require_once "view/dwm.php";
            break;
        case 'tpinews':
            require_once "view/tpinews.php";
            break;
        case 'dellupre':
            require_once "view/dellupgrep.php";
            break;
            
        // Project categories
        case 'cat_ongoing':
            require_once "view/ongoing.php";
            break;
        default:
            require_once "view/_categories.php";
    }
} else {
    require_once "view/_categories.php";
}
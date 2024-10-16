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
        case 'truenassetup':
            require_once "view/truenas.php";
            break;
        case 'mbprepairs':
            require_once "view/mbprepairs.php";
            break;
        case 'linuxdaily':
            require_once "view/linuxdaily.php";
            break;
        case 'winserver':
            require_once "view/winsrv.php";
            break;
        case 'domoticz':
            require_once "view/domoticz.php";
            break;
        case 'a1286':
            require_once "view/a1286.php";
            break;
        case 'samsung_a33':
            require_once "view/samsung_a33.php";
            break;
        // Project categories
        case 'cat_ongoing':
            require_once "view/_ongoing.php";
            break;
        case 'cat_apps':
            require_once "view/_app.php";
            break;
        case 'cat_hardware':
            require_once "view/_hardware.php";
            break;
        case 'cat_web':
            require_once "view/_web.php";
            break;
        case 'cat_system':
            require_once "view/_system.php";
            break;
        case 'cat_challenges':
            require_once "view/_challenges.php";
            break;
        // More info
        case 'more_dell':
            require_once "view/more_dell.php";
            break;
        case 'more_mbprepairs':
            require_once "view/more_mbp.php";
            break;
        //default
        default:
            require_once "view/_categories.php";
    }
} else {
    require_once "view/_categories.php";
}
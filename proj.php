<?php

/**
 * Index file for the proj directory. Redirects to the desired page.
 * Author   : louis.richard@tutanota.com
 * Project  : louisrichard.github.io / richard486.ch
 * Created  : NOV 30th 2025
 * Info     : N/A
 *
 * Source       :   https://github.com/LouisRichard/louisrichard.github.io
 */

$title = 'PROJECT';
if (isset($_GET['proj'])) {
    $proj = $_GET['proj'];

    switch ($proj) {
        case "gamelib":
            require_once "view/proj/gamelib.php";
            break;
        case "r486":
            require_once "view/xp/r486.php";
            break;
        case "awsscheduler":
            require_once "view/xp/awsscheduler.php";
            break;
        case "laptoprep":
            require_once "view/xp/laptoprep.php";
            break;
        case "winsrv":
            require_once "view/xp/winsrv.php";
            break;
        case "hackpro":
            require_once "view/xp/hackpro.php";
            break;

        //default
        default:
            header("location: index.html");
            break;
    }
} else {
    header("location: index.html");
}
<?php

/**
 * Index file for the xp directory. Redirects to the desired page.
 * Author   : louis.richard@tutanota.com
 * Project  : louisrichard.github.io / richard486.ch
 * Created  : NOV 12th 2025
 * Info     : N/A
 *
 * Source       :   https://github.com/LouisRichard/louisrichard.github.io
 */

$title = 'EXPERIENCE';
if (isset($_GET['xp'])) {
    $xp = $_GET['xp'];

    switch ($xp) {
        case "nn":
            require_once "view/xp/nespresso.php";
            break;
        case "cpnv":
            require_once "view/xp/cpnv.php";
            break;
        case "lrichard":
            require_once "view/xp/lrichard.php";
            break;
        case "darest":
            require_once "view/xp/darest.php";
            break;

        //default
        default:
            header("location: index.html");
            break;
    }
} else {
    header("location: index.html");
}
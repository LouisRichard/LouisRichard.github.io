<?php

/**
 * Index file for the xp directory. Redirects to the desired page.
 * Author   : louis.richard@tutanota.com
 * Project  : louisrichard.github.io / richard486.ch
 * Created  : NOV 13th 2025
 * Info     : N/A
 *
 * Source       :   https://github.com/LouisRichard/louisrichard.github.io
 */
$title = 'EDUCATION';
if (isset($_GET['edu'])) {
    $edu = $_GET['edu'];

    switch ($edu) {
        case "cpnv":
            require_once "view/edu/cpnv.php";
            break;
        case "hackerrank":
            require_once "view/edu/hackerrank.php";
            break;
        //default
        default:
            header("location: index.html");
            break;
    }
} else {
    header('location: index.html');
}
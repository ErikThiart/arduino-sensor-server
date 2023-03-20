<?php

/*
 * This file contains functions to convert between different units of distance.
 * The functions are named in the following format:
 * 
 *     <unit1>_to_<unit2>
 * 
 * For example, to convert from millimeters to centimeters, you would call the
 * function mm_to_cm(300).
 * 
 * The functions in this file are used by the app/helpers/distance_concersions.php file.
 */

function mm_to_cm($mm) {
    return $mm / 10;
}

function mm_to_m($mm) {
    return $mm / 1000;
}

function mm_to_km($mm) {
    return $mm / 1000000;
}

function cm_to_mm($cm) {
    return $cm * 10;
}

function cm_to_m($cm) {
    return $cm / 100;
}

function cm_to_km($cm) {
    return $cm / 100000;
}

function m_to_mm($m) {
    return $m * 1000;
}

function m_to_cm($m) {
    return $m * 100;
}

function m_to_km($m) {
    return $m / 1000;
}

function km_to_mm($km) {
    return $km * 1000000;
}

function km_to_cm($km) {
    return $km * 100000;
}

function km_to_m($km) {
    return $km * 1000;
}

// Path: app/helpers/distance_concersions.php
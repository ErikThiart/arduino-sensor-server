<?php

/*
* This file contains functions to convert between different units of weight.
* The functions are named in the following format:
* 
*     <unit1>_to_<unit2>
* 
* For example, to convert from grams to kilograms, you would call the
* function grams_to_kilograms(300).
* 
* The functions in this file are used by the app/helpers/weight_convertions.php file.
*/

function grams_to_kilogams($grams) {
    return $grams / 1000;
}

function grams_to_ounces($grams) {
    return $grams * 0.035274;
}

function grams_to_pounds($grams) {
    return $grams * 0.00220462;
}

function kilogram_to_grams($kilogram) {
    return $kilogram * 1000;
}

function kilogram_to_ounces($kilogram) {
    return $kilogram * 35.274;
}

function kilogram_to_pounds($kilogram) {
    return $kilogram * 2.20462;
}

function ounces_to_grams($ounces) {
    return $ounces * 28.3495;
}

function ounces_to_kilograms($ounces) {
    return $ounces * 0.0283495;
}

function ounces_to_pounds($ounces) {
    return $ounces * 0.0625;
}

function pounds_to_grams($pounds) {
    return $pounds * 453.592;
}

function pounds_to_kilograms($pounds) {
    return $pounds * 0.453592;
}

function pounds_to_ounces($pounds) {
    return $pounds * 16;
}

// Path: app/helpers/weight_convertions.php
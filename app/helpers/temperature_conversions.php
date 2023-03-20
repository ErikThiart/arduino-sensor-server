<?php

/*
 * This file contains functions to convert between different units of temperature.
 * The functions are named in the following format:
 * 
 *     <unit1>_to_<unit2>
 * 
 * For example, to convert from Celsius to Fahrenheit, you would call the
 * function celsius_to_fahrenheit(100).
 * 
 * The functions in this file are used by the app/helpers/temperature_conversions.php file.
 */

function celsius_to_fahrenheit($celsius) {
    return ($celsius * 9 / 5) + 32;
}

function celsius_to_kelvin($celsius) {
    return $celsius + 273.15;
}

function fahrenheit_to_celsius($fahrenheit) {
    return ($fahrenheit - 32) * 5 / 9;
}

function fahrenheit_to_kelvin($fahrenheit) {
    return ($fahrenheit + 459.67) * 5 / 9;
}

function kelvin_to_celsius($kelvin) {
    return $kelvin - 273.15;
}

function kelvin_to_fahrenheit($kelvin) {
    return $kelvin * 9 / 5 - 459.67;
}

function celsius_to_rankine($celsius) {
    return ($celsius + 273.15) * 9 / 5;
}

function fahrenheit_to_rankine($fahrenheit) {
    return $fahrenheit + 459.67;
}

function kelvin_to_rankine($kelvin) {
    return $kelvin * 9 / 5;
}

function rankine_to_celsius($rankine) {
    return ($rankine - 491.67) * 5 / 9;
}

function rankine_to_fahrenheit($rankine) {
    return $rankine - 459.67;
}

function rankine_to_kelvin($rankine) {
    return $rankine * 5 / 9;
}

function celsius_to_delisle($celsius) {
    return (100 - $celsius) * 3 / 2;
}

function fahrenheit_to_delisle($fahrenheit) {
    return (212 - $fahrenheit) * 5 / 6;
}

function kelvin_to_delisle($kelvin) {
    return (373.15 - $kelvin) * 3 / 2;
}

function rankine_to_delisle($rankine) {
    return (671.67 - $rankine) * 5 / 6;
}

function delisle_to_celsius($delisle) {
    return (100 - $delisle) * 2 / 3;
}

function delisle_to_fahrenheit($delisle) {
    return 212 - $delisle * 6 / 5;
}

function delisle_to_kelvin($delisle) {
    return (373.15 - $delisle) * 2 / 3;
}

function delisle_to_rankine($delisle) {
    return 671.67 - $delisle * 6 / 5;
}

function celsius_to_newton($celsius) {
    return $celsius * 33 / 100;
}

function fahrenheit_to_newton($fahrenheit) {
    return ($fahrenheit - 32) * 11 / 60;
}

function kelvin_to_newton($kelvin) {
    return ($kelvin - 273.15) * 33 / 100;
}

function rankine_to_newton($rankine) {
    return ($rankine - 491.67) * 11 / 60;
}

function delisle_to_newton($delisle) {
    return (100 - $delisle) * 11 / 50;
}

function newton_to_celsius($newton) {
    return $newton * 100 / 33;
}

function newton_to_fahrenheit($newton) {
    return $newton * 60 / 11 + 32;
}

function newton_to_kelvin($newton) {
    return $newton * 100 / 33 + 273.15;
}

function newton_to_rankine($newton) {
    return $newton * 60 / 11 + 491.67;
}

function newton_to_delisle($newton) {
    return (100 - $newton) * 50 / 11;
}

function celsius_to_reaumur($celsius) {
    return $celsius * 4 / 5;
}

function fahrenheit_to_reaumur($fahrenheit) {
    return ($fahrenheit - 32) * 4 / 9;
}

function kelvin_to_reaumur($kelvin) {
    return ($kelvin - 273.15) * 4 / 5;
}

function rankine_to_reaumur($rankine) {
    return ($rankine - 491.67) * 4 / 9;
}

function delisle_to_reaumur($delisle) {
    return (100 - $delisle) * 8 / 15;
}

function newton_to_reaumur($newton) {
    return $newton * 80 / 33;
}

function reaumur_to_celsius($reaumur) {
    return $reaumur * 5 / 4;
}

function reaumur_to_fahrenheit($reaumur) {
    return $reaumur * 9 / 4 + 32;
}

function reaumur_to_kelvin($reaumur) {
    return $reaumur * 5 / 4 + 273.15;
}

function reaumur_to_rankine($reaumur) {
    return $reaumur * 9 / 4 + 491.67;
}

function reaumur_to_delisle($reaumur) {
    return (80 - $reaumur) * 15 / 8;
}

function reaumur_to_newton($reaumur) {
    return $reaumur * 33 / 80;
}

function celsius_to_romer($celsius) {
    return $celsius * 21 / 40 + 7.5;
}

function fahrenheit_to_romer($fahrenheit) {
    return ($fahrenheit - 32) * 7 / 24 + 7.5;
}

function kelvin_to_romer($kelvin) {
    return ($kelvin - 273.15) * 21 / 40 + 7.5;
}

function rankine_to_romer($rankine) {
    return ($rankine - 491.67) * 7 / 24 + 7.5;
}

function delisle_to_romer($delisle) {
    return (60 - $delisle) * 7 / 20 + 7.5;
}

function newton_to_romer($newton) {
    return $newton * 35 / 21 + 7.5;
}

function reaumur_to_romer($reaumur) {
    return $reaumur * 24 / 7 + 7.5;
}

function romer_to_celsius($romer) {
    return ($romer - 7.5) * 40 / 21;
}

function romer_to_fahrenheit($romer) {
    return ($romer - 7.5) * 24 / 7 + 32;
}

function romer_to_kelvin($romer) {
    return ($romer - 7.5) * 40 / 21 + 273.15;
}

function romer_to_rankine($romer) {
    return ($romer - 7.5) * 24 / 7 + 491.67;
}

function romer_to_delisle($romer) {
    return (60 - ($romer - 7.5) * 20 / 7);
}

function romer_to_newton($romer) {
    return ($romer - 7.5) * 21 / 35;
}

function romer_to_reaumur($romer) {
    return ($romer - 7.5) * 7 / 24;
}

function celsius_to_levy($celsius) {
    return $celsius * 100 / 33;
}

function fahrenheit_to_levy($fahrenheit) {
    return ($fahrenheit - 32) * 50 / 11;
}

function kelvin_to_levy($kelvin) {
    return ($kelvin - 273.15) * 100 / 33;
}

function rankine_to_levy($rankine) {
    return ($rankine - 491.67) * 50 / 11;
}

function delisle_to_levy($delisle) {
    return (100 - $delisle) * 50 / 11;
}

function newton_to_levy($newton) {
    return $newton * 100 / 33;
}

function reaumur_to_levy($reaumur) {
    return $reaumur * 33 / 80;
}

function romer_to_levy($romer) {
    return ($romer - 7.5) * 21 / 35;
}

function levy_to_celsius($levy) {
    return $levy * 33 / 100;
}

function levy_to_fahrenheit($levy) {
    return $levy * 11 / 50 + 32;
}

function levy_to_kelvin($levy) {
    return $levy * 33 / 100 + 273.15;
}

function levy_to_rankine($levy) {
    return $levy * 11 / 50 + 491.67;
}

function levy_to_delisle($levy) {
    return (100 - $levy) * 11 / 50;
}

function levy_to_newton($levy) {
    return $levy * 33 / 100;
}

function levy_to_reaumur($levy) {
    return $levy * 80 / 33;
}

function levy_to_romer($levy) {
    return $levy * 35 / 21 + 7.5;
}

function celsius_to_baume($celsius) {
    return $celsius * 18 / 100;
}

function fahrenheit_to_baume($fahrenheit) {
    return ($fahrenheit - 32) * 9 / 50;
}

function kelvin_to_baume($kelvin) {
    return ($kelvin - 273.15) * 18 / 100;
}

function rankine_to_baume($rankine) {
    return ($rankine - 491.67) * 9 / 50;
}

function delisle_to_baume($delisle) {
    return (100 - $delisle) * 9 / 50;
}

function newton_to_baume($newton) {
    return $newton * 18 / 100;
}

function reaumur_to_baume($reaumur) {
    return $reaumur * 18 / 25;
}

function romer_to_baume($romer) {
    return ($romer - 7.5) * 9 / 35;
}

function levy_to_baume($levy) {
    return $levy * 50 / 9;
}

function baume_to_celsius($baume) {
    return $baume * 100 / 18;
}

function baume_to_fahrenheit($baume) {
    return $baume * 50 / 9 + 32;
}

function baume_to_kelvin($baume) {
    return $baume * 100 / 18 + 273.15;
}

function baume_to_rankine($baume) {
    return $baume * 50 / 9 + 491.67;
}

function baume_to_delisle($baume) {
    return (100 - $baume) * 50 / 9;
}

function baume_to_newton($baume) {
    return $baume * 100 / 18;
}

function baume_to_reaumur($baume) {
    return $baume * 25 / 18;
}

function baume_to_romer($baume) {
    return $baume * 35 / 9 + 7.5;
}

function baume_to_levy($baume) {
    return $baume * 9 / 50;
}

function celsius_to_brix($celsius) {
    return $celsius * 18 / 100;
}

function fahrenheit_to_brix($fahrenheit) {
    return ($fahrenheit - 32) * 9 / 50;
}

function kelvin_to_brix($kelvin) {
    return ($kelvin - 273.15) * 18 / 100;
}

function rankine_to_brix($rankine) {
    return ($rankine - 491.67) * 9 / 50;
}

function delisle_to_brix($delisle) {
    return (100 - $delisle) * 9 / 50;
}

function newton_to_brix($newton) {
    return $newton * 18 / 100;
}

function reaumur_to_brix($reaumur) {
    return $reaumur * 18 / 25;
}

function romer_to_brix($romer) {
    return ($romer - 7.5) * 9 / 35;
}

function levy_to_brix($levy) {
    return $levy * 50 / 9;
}

function baume_to_brix($baume) {
    return $baume * 50 / 9;
}

function brix_to_celsius($brix) {
    return $brix * 100 / 18;
}

function brix_to_fahrenheit($brix) {
    return $brix * 50 / 9 + 32;
}

function brix_to_kelvin($brix) {
    return $brix * 100 / 18 + 273.15;
}

function brix_to_rankine($brix) {
    return $brix * 50 / 9 + 491.67;
}

function brix_to_delisle($brix) {
    return (100 - $brix) * 50 / 9;
}

function brix_to_newton($brix) {
    return $brix * 100 / 18;
}

function brix_to_reaumur($brix) {
    return $brix * 25 / 18;
}

function brix_to_romer($brix) {
    return $brix * 35 / 9 + 7.5;
}

function brix_to_levy($brix) {
    return $brix * 9 / 50;
}

function brix_to_baume($brix) {
    return $brix * 9 / 50;
}

// End of file temperature.php
<?php

/*
 * This file contains functions to convert between different units of time.
 * The functions are named in the following format:
 * 
 *     <unit1>_to_<unit2>
 * 
 * For example, to convert from milliseconds to seconds, you would call the
 * function milliseconds_to_seconds(300).
 * 
 * The functions in this file are used by the app/helpers/time_conversions.php file.
 */

function milliseconds_to_seconds($milliseconds) {
    return $milliseconds / 1000;
}

function milliseconds_to_minutes($milliseconds) {
    return $milliseconds / 60000;
}

function milliseconds_to_hours($milliseconds) {
    return $milliseconds / 3600000;
}

function milliseconds_to_days($milliseconds) {
    return $milliseconds / 86400000;
}

function seconds_to_milliseconds($seconds) {
    return $seconds * 1000;
}

function seconds_to_minutes($seconds) {
    return $seconds / 60;
}

function seconds_to_hours($seconds) {
    return $seconds / 3600;
}

function seconds_to_days($seconds) {
    return $seconds / 86400;
}

function minutes_to_milliseconds($minutes) {
    return $minutes * 60000;
}

function minutes_to_seconds($minutes) {
    return $minutes * 60;
}

function minutes_to_hours($minutes) {
    return $minutes / 60;
}

function minutes_to_days($minutes) {
    return $minutes / 1440;
}

function hours_to_milliseconds($hours) {
    return $hours * 3600000;
}

function hours_to_seconds($hours) {
    return $hours * 3600;
}

function hours_to_minutes($hours) {
    return $hours * 60;
}

function hours_to_days($hours) {
    return $hours / 24;
}

function days_to_milliseconds($days) {
    return $days * 86400000;
}

function days_to_seconds($days) {
    return $days * 86400;
}

function days_to_minutes($days) {
    return $days * 1440;
}

function days_to_hours($days) {
    return $days * 24;
}

// path: app/helpers/distance_conversions.php
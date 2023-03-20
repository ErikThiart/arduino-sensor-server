<?php
/**
 * This file contains functions that are used by the app/helpers/strings.php file.
 */

// This function is used to convert a string to a URL friendly slug, convert spaces to underscores, etc.

// This implementation does the following:

// Uses mb_strtolower() to convert the input string to lowercase, handling multibyte characters correctly.
// Uses iconv() to replace special characters with their ASCII equivalents. This ensures that characters with diacritical marks (e.g. é, ü) are replaced with their base letter (e.g. e, u) rather than being removed entirely.
// Uses a regular expression to replace non-alphanumeric characters with hyphens. Multiple consecutive non-alphanumeric characters are replaced with a single hyphen.
// Removes any leading or trailing hyphens from the resulting string.
// Throws an exception if the resulting string is empty (e.g. if the input string consists entirely of special characters or whitespace).
// Limits the length of the resulting string to 100 characters. This ensures that the resulting slug is not excessively long and does not cause issues with URL length limits.
// By including these additional steps, we can ensure that the resulting slugs are as robust and fail-proof as possible.
function slugify($string) {
    // Convert string to lowercase
    $string = mb_strtolower($string, 'UTF-8');
    
    // Replace special characters with their ASCII equivalents
    $string = iconv('UTF-8', 'ASCII//TRANSLIT', $string);
    
    // Replace non-alphanumeric characters with a hyphen
    $string = preg_replace('/[^a-z0-9]+/', '-', $string);
    
    // Remove leading/trailing hyphens
    $string = trim($string, '-');
    
    // Ensure that the resulting string is not empty
    if (empty($string)) {
        throw new Exception('Invalid input string');
    }
    
    // Limit the length of the resulting string to 100 characters
    if (mb_strlen($string, 'UTF-8') > 100) {
        $string = mb_substr($string, 0, 100, 'UTF-8');
    }
    
    return $string;
}

function get_random_string($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $characters_length = strlen($characters);
    $random_string = '';
    for ($i = 0; $i < $length; $i++) {
        $random_string .= $characters[rand(0, $characters_length - 1)];
    }
    return $random_string;
}

function get_random_number($length) {
    $characters = '0123456789';
    $characters_length = strlen($characters);
    $random_string = '';
    for ($i = 0; $i < $length; $i++) {
        $random_string .= $characters[rand(0, $characters_length - 1)];
    }
    return $random_string;
}

function get_random_string_lower($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
    $characters_length = strlen($characters);
    $random_string = '';
    for ($i = 0; $i < $length; $i++) {
        $random_string .= $characters[rand(0, $characters_length - 1)];
    }
    return $random_string;
}

function get_random_string_upper($length) {
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $characters_length = strlen($characters);
    $random_string = '';
    for ($i = 0; $i < $length; $i++) {
        $random_string .= $characters[rand(0, $characters_length - 1)];
    }
    return $random_string;
}

function get_random_string_special($length) {
    $characters = '0123456789!@#$%^&*()_+';
    $characters_length = strlen($characters);
    $random_string = '';
    for ($i = 0; $i < $length; $i++) {
        $random_string .= $characters[rand(0, $characters_length - 1)];
    }
    return $random_string;
}

function get_random_string_lower_special($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyz!@#$%^&*()_+';
    $characters_length = strlen($characters);
    $random_string = '';
    for ($i = 0; $i < $length; $i++) {
        $random_string .= $characters[rand(0, $characters_length - 1)];
    }
    return $random_string;
}

function get_random_string_upper_special($length) {
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+';
    $characters_length = strlen($characters);
    $random_string = '';
    for ($i = 0; $i < $length; $i++) {
        $random_string .= $characters[rand(0, $characters_length - 1)];
    }
    return $random_string;
}

function get_random_string_lower_upper($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $characters_length = strlen($characters);
    $random_string = '';
    for ($i = 0; $i < $length; $i++) {
        $random_string .= $characters[rand(0, $characters_length - 1)];
    }
    return $random_string;
}

function get_random_string_lower_upper_special($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+';
    $characters_length = strlen($characters);
    $random_string = '';
    for ($i = 0; $i < $length; $i++) {
        $random_string .= $characters[rand(0, $characters_length - 1)];
    }
    return $random_string;
}

function get_random_string_lower_upper_number($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $characters_length = strlen($characters);
    $random_string = '';
    for ($i = 0; $i < $length; $i++) {
        $random_string .= $characters[rand(0, $characters_length - 1)];
    }
    return $random_string;
}

function get_random_string_lower_upper_number_special($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+';
    $characters_length = strlen($characters);
    $random_string = '';
    for ($i = 0; $i < $length; $i++) {
        $random_string .= $characters[rand(0, $characters_length - 1)];
    }
    return $random_string;
}

function get_random_string_lower_number($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
    $characters_length = strlen($characters);
    $random_string = '';
    for ($i = 0; $i < $length; $i++) {
        $random_string .= $characters[rand(0, $characters_length - 1)];
    }
    return $random_string;
}

function get_random_string_lower_number_special($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyz!@#$%^&*()_+';
    $characters_length = strlen($characters);
    $random_string = '';
    for ($i = 0; $i < $length; $i++) {
        $random_string .= $characters[rand(0, $characters_length - 1)];
    }
    return $random_string;
}

function get_random_string_upper_number($length) {
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $characters_length = strlen($characters);
    $random_string = '';
    for ($i = 0; $i < $length; $i++) {
        $random_string .= $characters[rand(0, $characters_length - 1)];
    }
    return $random_string;
}

function get_random_string_upper_number_special($length) {
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+';
    $characters_length = strlen($characters);
    $random_string = '';
    for ($i = 0; $i < $length; $i++) {
        $random_string .= $characters[rand(0, $characters_length - 1)];
    }
    return $random_string;
}

function get_random_string_upper_lower_number($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $characters_length = strlen($characters);
    $random_string = '';
    for ($i = 0; $i < $length; $i++) {
        $random_string .= $characters[rand(0, $characters_length - 1)];
    }
    return $random_string;
}

function get_random_string_upper_lower_special($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+';
    $characters_length = strlen($characters);
    $random_string = '';
    for ($i = 0; $i < $length; $i++) {
        $random_string .= $characters[rand(0, $characters_length - 1)];
    }
    return $random_string;
}

function get_random_string_upper_lower($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $characters_length = strlen($characters);
    $random_string = '';
    for ($i = 0; $i < $length; $i++) {
        $random_string .= $characters[rand(0, $characters_length - 1)];
    }
    return $random_string;
}

function get_random_string_upper_lower_number_special($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+';
    $characters_length = strlen($characters);
    $random_string = '';
    for ($i = 0; $i < $length; $i++) {
        $random_string .= $characters[rand(0, $characters_length - 1)];
    }
    return $random_string;
}
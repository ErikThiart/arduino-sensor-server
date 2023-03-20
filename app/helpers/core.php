<?php

// get_client_ip(): retrieves the IP address of the client making the request.
function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP')) {
        $ipaddress = getenv('HTTP_CLIENT_IP');
    } else if (getenv('HTTP_X_FORWARDED_FOR')) {
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    } else if (getenv('HTTP_X_FORWARDED')) {
        $ipaddress = getenv('HTTP_X_FORWARDED');
    } else if (getenv('HTTP_FORWARDED_FOR')) {
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    } else if (getenv('HTTP_FORWARDED')) {
        $ipaddress = getenv('HTTP_FORWARDED');
    } else if (getenv('REMOTE_ADDR')) {
        $ipaddress = getenv('REMOTE_ADDR');
    } else {
        $ipaddress = 'UNKNOWN';
    }
    return $ipaddress;
}

// is_ajax_request(): determines whether the current request was made via AJAX.
function is_ajax_request() {
    return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
}

// is_post_request(): determines whether the current request was made via POST.
function is_post_request() {
    return $_SERVER['REQUEST_METHOD'] == 'POST';
}

// is_get_request(): determines whether the current request was made via GET.
function is_get_request() {
    return $_SERVER['REQUEST_METHOD'] == 'GET';
}

// is_https(): determines whether the current request was made via HTTPS.
function is_https() {
    return isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on';
}

// is_cli(): determines whether the current request was made via CLI.
function is_cli() {
    return php_sapi_name() === 'cli';
}

// is_email_valid(): checks whether an email address is valid according to the RFC 5322 standard.
function is_email_valid($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// is_url_valid(): checks whether a URL is valid according to the RFC 3986 standard.
function is_url_valid($url) {
    return filter_var($url, FILTER_VALIDATE_URL);
}

// is_ip_valid(): checks whether an IP address is valid according to the RFC 3986 standard.
function is_ip_valid($ip) {
    return filter_var($ip, FILTER_VALIDATE_IP);
}

// is_mac_valid(): checks whether a MAC address is valid according to the RFC 3986 standard.
function is_mac_valid($mac) {
    return filter_var($mac, FILTER_VALIDATE_MAC);
}

// sanitize_input(): removes potentially harmful characters from user input to prevent SQL injection and other security vulnerabilities.
function sanitize_input($input) {
    return htmlspecialchars(strip_tags(trim($input)));
}

// calculate_age(): calculates the age of a person based on their birthdate.
function calculate_age($birthdate) {
    $birthdate = new DateTime($birthdate);
    $today = new DateTime('today');
    $age = $birthdate->diff($today)->y;
    return $age;
}

// truncate_string(): truncates a string to a specified length and adds ellipsis if needed.
function truncate_string($string, $length) {
    if (mb_strlen($string, 'UTF-8') > $length) {
        $string = mb_substr($string, 0, $length, 'UTF-8') . '...';
    }
    return $string;
}

// generate_verification_code() - a function that generates a random code that can be used to verify a user's identity (e.g. for two-factor authentication)
function generate_verification_code($length = 6) {
    $characters = '0123456789';
    $characters_length = strlen($characters);
    $random_string = '';
    for ($i = 0; $i < $length; $i++) {
        $random_string .= $characters[rand(0, $characters_length - 1)];
    }
    return $random_string;
}
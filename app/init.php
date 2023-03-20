<?php
// set session
session_start();
// set timezon to South Africa
date_default_timezone_set('Africa/Johannesburg');
// set error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);
// include config file
include_once 'config.php';
// include database connection
include_once 'database.php';
// include helper functions in the helpers folder
foreach (glob('helpers/*.php') as $filename) {
    include_once $filename;
}
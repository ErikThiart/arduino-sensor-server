<?php
// create pdo connection
try {
    $pdo = new PDO('mysql:host='.$db_host.';dbname='.$db_name.'', $db_username, $db_password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $pdo->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
    $pdo->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
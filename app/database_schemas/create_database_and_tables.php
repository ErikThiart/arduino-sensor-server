<?php
// explain what this file does
echo "Creating database and tables...\n";

// Define the database connection parameters
$db_host = "localhost";
$db_user = "username";
$db_pass = "password";
$db_name = "database_name";

// Create a PDO object for the database connection
$dsn = "mysql:host=$db_host;dbname=$db_name";
$pdo = new PDO($dsn, $db_user, $db_pass);

// Get all SQL files in the "database_schemas" directory
$sql_files = glob(__DIR__ . "/database_schemas/*.sql");

// Execute each SQL file to create its corresponding table
foreach ($sql_files as $sql_file) {
    $sql = file_get_contents($sql_file);
    $pdo->exec($sql);
    echo "Created table from $sql_file\n";
}

// Close the database connection
$pdo = null;    

echo "Done!\n";
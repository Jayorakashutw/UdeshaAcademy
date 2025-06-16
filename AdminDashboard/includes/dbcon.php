<?php
$host = 'localhost';          // Database host
$db   = 'u208278857_UdeshaAcademy'; // Database name
$user = 'u208278857_UTWAAdmin';      // Database username
$pass = 'Primus@2025Jnue';      // Database password
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Enable exceptions
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // Fetch associative arrays
    PDO::ATTR_EMULATE_PREPARES   => false,                  // Native prepared statements
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    // echo "Database connected successfully!";
} catch (PDOException $e) {
    // Never show full error details in production
    error_log($e->getMessage()); // Log error
    die("Database connection failed. Please try again later.");
}
?>

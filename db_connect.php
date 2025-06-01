<?php
// Database configuration
$host = 'localhost'; // Replace with your host name (e.g., 'localhost' or '127.0.0.1')
$dbname = 'wt'; // Replace with your database name
$username = 'hani'; // Replace with your database username
$password = '1234'; // Replace with your database password

try {
    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Set PDO to throw exceptions for errors
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Set character set to utf8mb4 (optional, adjust as needed)
    $pdo->exec("SET NAMES utf8mb4");
} catch (PDOException $e) {
    // Handle database connection errors
    die("Database connection failed: " . $e->getMessage());
}

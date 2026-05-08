<?php


// connect to database with PDO
try {
    $pdo = new PDO('mysql:host=localhost;dbname=restaurant_db', 'root', '');
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
<?php

// Inside your PHP handler
session_start();
include "../db/conn.php" ;
include "../includes/function.php";
$userId = $_SESSION['user_id']; // Ensure this matches your session variable name
$currentDate = date('Y-m-d H:i:s');

$query = "UPDATE users SET is_elite = 1, subscribed_at = ? WHERE id = ?";
$stmt = $pdo->prepare($query);

if ($stmt->execute([$currentDate, $userId])) {
    // Update the session variable so the website knows immediately
    $_SESSION['is_elite'] = 1;
    // Redirect to homepage or show success message
    redirect("../index.php");
}
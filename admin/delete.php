<?php 
session_start();
include "../includes/function.php";
include "../db/conn.php";


if (isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['id'])) {
    $stmt = $pdo->prepare("DELETE FROM orders WHERE id = ?");
    $stmt->execute([$_GET['id']]);
    redirect("admin.php");
}

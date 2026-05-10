<?php 
session_start();
include "../includes/function.php";
include "../db/conn.php" ;
session_start() ;

// 2. UPDATE FUNCTIONALITY
if (isset($_GET['action']) && $_GET['action'] == 'complete' && isset($_GET['id'])) {
    $stmt = $pdo->prepare("UPDATE orders SET status = 'Completed' WHERE id = ?");
    $stmt->execute([$_GET['id']]);
    redirect("admin.php");
}


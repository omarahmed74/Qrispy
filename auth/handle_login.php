<?php

session_start();
include "../db/conn.php";
include "../includes/function.php";


if (isset($_POST['submit'])) {
    $email = clean($_POST['Email']);
    $password = clean($_POST['Password']);

    if (empty($email) || empty($password)) {
        $_SESSION['login_error'] = "Please fill in all fields.";
        redirect("login.php");
        exit();
    }
    // Your login logic here

    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->execute(['email' => $email]);
    
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {

        // Login successful
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['name'];
        $_SESSION['role'] = $user['role'];
        
        // Redirect based on role
        if ($user['role'] === 'admin') {
            redirect("../admin.php");
        } else {
            redirect("../index.php");
        }

        exit();

    } else {
        // Login failed

        $_SESSION['login_error'] = "Invalid email or password.";
        redirect("login.php");
        exit();
    }
    
}




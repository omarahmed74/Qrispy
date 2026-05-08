<?php

include "../db/conn.php";
include "../includes/function.php";

session_start();

if(isset($_POST['submit'])){
    // catch data
    $name = clean($_POST['name']);
    $email = clean($_POST['email']);
    $password = clean($_POST['password']);

    // validation
    $errors = [];

    if(empty($name)){
        $errors[] = "Name is required";
    }elseif(is_numeric($name)){
        $errors[] = "Name must be string";
    }

    if(empty($email)){
        $errors[] = "Email is required";
    }elseif(!filter_var($email , FILTER_VALIDATE_EMAIL)){
        $errors[] = "Invalid email";
    }
    if(empty($password)){
        $errors[] = "Password is required";
    }elseif(strlen($password) < 6){
        $errors[] = "Password must be at least 6 characters";
    }

    // check email exists
    if(empty($errors)){
        $query = 'SELECT * FROM users WHERE email = :email LIMIT 1';
        $stmt = $pdo->prepare($query);

        $stmt->execute([
            'email' => $email
        ]);
        $result = $stmt->fetchAll();
        if(count($result) > 0){
            $errors[] = "Email already exists";
        }
    }

    // if errors exist
    if(!empty($errors)){
        $_SESSION['errors'] = $errors;
        redirect("register.php");
    }

    // hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // insert data
    $query = 'INSERT INTO users(name, email, password) VALUES(:name, :email, :password)';
    $stmt = $pdo->prepare($query);

    $stmt->execute([
        'name' => $name,
        'email' => $email,
        'password' => $hashed_password
    ]);
    $_SESSION['success'] = "Account created successfully";
    redirect("login.php");
}


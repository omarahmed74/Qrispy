<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Qrispy Login</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="../assets/css/login.css">
  <link href="https://fonts.googleapis.com/css2?family=Spline+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

</head>
<body>
  <div class="auth-card">
    <img src="../assets/img/Qrispy_dark.svg" alt="Qrispy" class="brand-logo">
    <div class="alert alert-danger alert-auth" id="loginError" role="alert">
      <i class="fa-solid fa-circle-exclamation me-2"></i><span id="loginErrorMsg"></span>
    </div>
    <form action="handle_pro.php" method="POST"> 
    <div class="mb-3">
      <label for="loginEmail">Email Address</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-regular fa-envelope"></i></span>
        <input type="email" id="loginEmail" name="Email" class="form-control" placeholder="you@example.com" autocomplete="email" required >
      </div>
    </div>

    <div class="mb-3">
      <label for="loginPassword">Password</label>
      <div class="input-group">
        <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
        <input type="password" id="loginPassword" name="Password" class="form-control" placeholder="Enter your password" required>
        <span class="input-group-text toggle-pass">
          <i class="fa-regular fa-eye"></i>
        </span>
      </div>
    </div>
    <button class="btn btn-brand" type="submit" name="submit">
      <i class="fa-solid fa-right-to-bracket me-2"></i>Subscribe to Pro
    </button>
    </form>
    <div class="divider">hi</div>
    <p class="text-center mb-0" style="font-size:.9rem; color:#777">
    Subscribe to pro will take 100 EGP for 10% discount
    </p>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/auth.js"></script>
</body>
</html>

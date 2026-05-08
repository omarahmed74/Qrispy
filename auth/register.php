<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Qrispy Register</title>
  <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
  <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="../assets/css/register.css">
</head>
<body>
<div class="auth-card">
    <img src="../assets/img/Qrispy_dark.svg"
    alt="Qrispy"
    class="brand-logo">
    <h2>Create Account</h2>
    <p class="subtitle">
        Join us and start ordering today
    </p>
    <?php include "../errors/error.php"; ?>
    <form action="handle_register.php" method="POST">
        <div class="mt-3">
            <label>First Name</label>
            <div class="input-group">
                <span class="input-group-text">
                    <i class="fa-regular fa-user"></i>
                </span>
                <input type="text" class="form-control" placeholder="Your Name" name="name" value="<?php echo $_POST['name'] ?? '' ?>">
            </div>
        </div>
        <div class="mt-3">
            <label>Email Address</label>
            <div class="input-group">
                <span class="input-group-text">
                    <i class="fa-regular fa-envelope"></i>
                </span>
                <input type="email"class="form-control" placeholder="you@example.com" name="email" value="<?php echo $_POST['email'] ?? '' ?>">
            </div>
        </div>
        <div class="mt-3">
            <label>Password</label>
            <div class="input-group">
                <span class="input-group-text">
                    <i class="fa-solid fa-lock"></i>
                </span>
                <input
                type="password"class="form-control" placeholder="Min. 6 characters" name="password" value="<?php echo $_POST['password'] ?? '' ?>">
            </div>
        </div>
        <button  class="btn btn-brand mt-4"  type="submit" name="submit">
            <i class="fa-solid fa-user-plus me-2"></i>
            Create Account
        </button>
    </form>
    <div class="divider">or</div>
    <p class="text-center mb-0">
        Already have an account?
        <a href="login.php" class="auth-link">
            Sign in
        </a>
    </p>
</div>
</body>
</html>
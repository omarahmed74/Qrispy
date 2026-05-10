<?

?>
<head> 
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/all.min.css">
  <link rel="stylesheet" href="../assets/css/main.css">
  <link rel="stylesheet" href="../assets/css/login.css">
  <title>Document</title>
</head>
<body>
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
    </div class="mb-3" >
    <div style="color: black;">
        the price is 100 EGP per month gives you 10% discount on all orders.
    </div>
    <a class="btn btn-brand" type="submit" name="submit" href="../index.php">
      <i class="fa-solid fa-right-to-bracket me-2"></i>Subsecribe to Pro
    </a>
    </form>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>  
 </body>   
 
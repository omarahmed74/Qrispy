<?php
session_start();
include "../db/conn.php";
include "../includes/function.php";

$full_name = $_POST['full_name'];
$items = $_POST['items'] ?? []; 

if (empty($items)) {
    echo "<p>Please go back and select at least one item.</p>";
    echo "<a href='../menu/index.php'>Go back</a>";
    exit;
}
$user_id = $_SESSION['user_id'];

// Count distinct order names for this user to generate next order name
$count_stmt = $pdo->prepare("SELECT COUNT(DISTINCT name) FROM orders WHERE user_id = ?");
$count_stmt->execute([$user_id]);
$order_count = $count_stmt->fetchColumn(); 
$order_name  = 'order' . ($order_count + 1); 


$ids = implode(',', array_map('intval', $items)); 
$ordered_items = $pdo->query("SELECT * FROM menu WHERE item_id IN ($ids)")->fetchAll(PDO::FETCH_ASSOC);


// 1. Calculate the initial total
$total = 0;
foreach ($ordered_items as $item) {
    $total += $item['price'];
}
// 2. Apply the Elite Discount if applicable
$discount = 0;
if (isset($_SESSION['is_elite']) && $_SESSION['is_elite'] == 1) {
    $discount = $total * 0.10; // 10% discount
    $total = $total - $discount;
}
// 3. Now insert 
foreach ($ordered_items as $item) {
    $stmt = $pdo->prepare("INSERT INTO orders (name, price, status, quantity, user_id, item_id) VALUES (?, ?, ?, ?, ?, ?)");
    // Database save with discount 
   $item_price = (isset($_SESSION['is_elite']) && $_SESSION['is_elite'] == 1) ? ($item['price'] * 0.9): $item['price'];
    $stmt->execute([$order_name, $item_price, 'pending', 1, $user_id, $item['item_id']]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/main.css">
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg bg-white shadow py-3 sticky-top">
        <div class="container">
            <a class="navbar-brand" href="../index.php">
                <img src="../assets/img/Qrispy_dark.svg" alt="">
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="../index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="../index.php#menu">Menu</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="py-5">
        <div class="container">

            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h1>Thank you, <?php echo $full_name; ?>!</h1>
                    <p>Your <strong style="color:#d43076;"><?php echo $order_name; ?></strong> has been placed and is now <strong style="color:#d43076;">pending</strong>.</p>
                    <p class="text-muted"><?php echo count($ordered_items); ?> item(s)</p>
                </div>
            </div>
            <div class="row gy-4 justify-content-center">
                <?php foreach ($ordered_items as $item): ?>
                <div class="col-lg-3 col-sm-6">
                    <div class="menu-item bg-white shadow-on">
                        <img src="../assets/img/<?php echo $item['image']; ?>" alt="">
                        <div class="menu-item-content p-4">
                            <h5 class="mt-1 mb-2"><?php echo $item['item_name']; ?></h5>
                            <p class="small" style="color:#d43076; font-weight:600;">$<?php echo $item['price']; ?></p>
                            <span class="small text-muted"><i class="fa-solid fa-clock me-1"></i>Status: Pending</span>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="row mt-5">
                <div class="col-12 text-center">
                    <h4>Order Total: <span style="color:#d43076;">$<?php echo $total;?></span></h4>
                    <a href="../menu/index.php" class="btn btn-brand mt-3 px-5">Order More</a>
                </div>
            </div>

        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

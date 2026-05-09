<head> 
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/all.min.css">
  <link rel="stylesheet" href="../assets/css/main.css">
  <title>Document</title>
</head>
<?php
session_start();
include "../db/conn.php";
include "../includes/function.php";
$stmt = $pdo->prepare("SELECT * FROM menu");
$stmt->execute();
$menus = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<body>
  <nav class="navbar navbar-expand-lg bg-white shadow py-3 sticky-top">
        <div class="container">
          <a class="navbar-brand" href="#">
              <img src="../assets/img/Qrispy_dark.svg" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link home" href="../index.php" style="color: #d43076;">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../index.php#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../index.php#menu">Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../index.php#features">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../index.php#team">Team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../index.php#order">Order</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../index.php#blog">Blog</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <section id="menu" class="bg-light">
    <div class="container">
        <div class="row">
        <div class="col-12 intro-text">
        <h1>Explore Our Tasty Menu</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates quis molestias soluta nihil porro maiores eligendi?</p>

        </div>
        </div>
    </div>
    <div class="container">
        <ul class="nav nav-pills mb-4 justify-content-center" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all" aria-selected="true">All Items</button>
        </li>

        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-breakfast-tab" data-bs-toggle="pill" data-bs-target="#pills-breakfast" type="button" role="tab" aria-controls="pills-breakfast" aria-selected="true">Breakfast</button>
        </li>

        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-lunch-tab" data-bs-toggle="pill" data-bs-target="#pills-lunch" type="button" role="tab" aria-controls="pills-lunch" aria-selected="true">Lunch</button>
        </li>
    
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-dinner-tab" data-bs-toggle="pill" data-bs-target="#pills-dinner" type="button" role="tab" aria-controls="pills-dinner" aria-selected="true">Dinner</button>
        </li>
        </ul>
    
        <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab" tabindex="0">
            <div class="row gy-5">
            <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on">
                <img src="../assets/img/item_1.jpg" alt="">
                <div class="menu-item-content p-4">
                    <div>
                    <span class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star-half-stroke"></i>
                    </span> 
                    <span>Rated(3.5)</span>  

                    </div>
                    <h5 class="mt-1 mb-2"> Bread Greek Salad</h5>
                    <p class="small">Baked salmon to a fresh salad made with chickpeas, arugula, herbs and olives</p>
                </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on">
                <img src="../assets/img/item_8.jpg" alt="">
                <div class="menu-item-content p-4">
                    <div>
                    <span class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </span> 
                    <span>Rated(4.0)</span>  

                    </div>
                    <h5 class="mt-1 mb-2">Lobster Roll Grilled</h5>
                    <p class="small">Baked salmon to a fresh salad made with chickpeas, arugula, herbs and olives</p>
                </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on">
                <img src="../assets/img/item_2.jpg" alt="">
                <div class="menu-item-content p-4">
                    <div>
                    <span class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star-half-stroke"></i>
                    </span> 
                    <span>Rated(4.5)</span>  

                    </div>
                    <h5 class="mt-1 mb-2">Italian Pasta Si</h5>
                    <p class="small">Baked salmon to a fresh salad made with chickpeas, arugula, herbs and olives</p>
                </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on">
                <img src="../assets/img/item_3.jpg" alt="">
                <div class="menu-item-content p-4">
                    <div>
                    <span class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star-half-stroke"></i>
                    </span> 
                    <span>Rated(4.5)</span>  

                    </div>
                    <h5 class="mt-1 mb-2">Crispy Circle Potato</h5>
                    <p class="small">Baked salmon to a fresh salad made with chickpeas, arugula, herbs and olives</p>
                </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on">
                <img src="../assets/img/item_4.jpg" alt="">
                <div class="menu-item-content p-4">
                    <div>
                    <span class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star-half-stroke"></i>
                    </span> 
                    <span>Rated(3.5)</span>  

                    </div>
                    <h5 class="mt-1 mb-2">Wendys Chili Recipe</h5>
                    <p class="small">Baked salmon to a fresh salad made with chickpeas, arugula, herbs and olives</p>
                </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on">
                <img src="../assets/img/item_5.jpg" alt="">
                <div class="menu-item-content p-4">
                    <div>
                    <span class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star-half-stroke"></i>
                    </span> 
                    <span>Rated(4.5)</span>  

                    </div>
                    <h5 class="mt-1 mb-2">Mexican Ole Pizza</h5>
                    <p class="small">Baked salmon to a fresh salad made with chickpeas, arugula, herbs and olives</p>
                </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on">
                <img src="../assets/img/item_6.jpg" alt="">
                <div class="menu-item-content p-4">
                    <div>
                    <span class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </span> 
                    <span>Rated(5.0)</span>  

                    </div>
                    <h5 class="mt-1 mb-2">Fudg Chewy Chicken</h5>
                    <p class="small">Baked salmon to a fresh salad made with chickpeas, arugula, herbs and olives</p>
                </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on">
                <img src="../assets/img/item_7.jpg" alt="">
                <div class="menu-item-content p-4">
                    <div>
                    <span class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </span> 
                    <span>Rated(5.0)</span>  

                    </div>
                    <h5 class="mt-1 mb-2">Burger Meat Liquor</h5>
                    <p class="small">Baked salmon to a fresh salad made with chickpeas, arugula, herbs and olives</p>
                </div>
                </div>
            </div>
            
            
            </div>
        </div>

        <div class="tab-pane fade show" id="pills-breakfast" role="tabpanel" aria-labelledby="pills-breakfast-tab" tabindex="0">
            <div class="row gy-4">
            <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on">
                <img src="../assets/img/item_2.jpg" alt="">
                <div class="menu-item-content p-4">
                    <div>
                    <span class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </span> 
                    <span>Rated(4.0)</span>  

                    </div>
                    <h5 class="mt-1 mb-2">Italian Pasta Si</h5>
                    <p class="small">Baked salmon to a fresh salad made with chickpeas, arugula, herbs and olives</p>
                </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on">
                <img src="../assets/img/item_1.jpg" alt="">
                <div class="menu-item-content p-4">
                    <div>
                    <span class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </span> 
                    <span>Rated(5.0)</span>  

                    </div>
                    <h5 class="mt-1 mb-2"> Bread Greek Salad</h5>
                    <p class="small">Baked salmon to a fresh salad made with chickpeas, arugula, herbs and olives</p>
                </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on">
                <img src="../assets/img/item_3.jpg" alt="">
                <div class="menu-item-content p-4">
                    <div>
                    <span class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star-half-stroke"></i>
                    </span> 
                    <span>Rated(4.5)</span>  

                    </div>
                    <h5 class="mt-1 mb-2">Crispy Circle Potato</h5>
                    <p class="small">Baked salmon to a fresh salad made with chickpeas, arugula, herbs and olives</p>
                </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on">
                <img src="../assets/img/item_8.jpg" alt="">
                <div class="menu-item-content p-4">
                    <div>
                    <span class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star-half-stroke"></i>
                    </span> 
                    <span>Rated(3.5)</span>  

                    </div>
                    <h5 class="mt-1 mb-2">Lobster Roll Grilled</h5>
                    <p class="small">Baked salmon to a fresh salad made with chickpeas, arugula, herbs and olives</p>
                </div>
                </div>
            </div> 
            </div>
        </div>
        <div class="tab-pane fade show" id="pills-lunch" role="tabpanel" aria-labelledby="pills-lunch-tab" tabindex="0">
            <div class="row gy-4">
            
            <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on">
                <img src="../assets/img/item_4.jpg" alt="">
                <div class="menu-item-content p-4">
                    <div>
                    <span class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </span> 
                    <span>Rated(5.0)</span>  

                    </div>
                    <h5 class="mt-1 mb-2">Wendys Chili Recipe</h5>
                    <p class="small">Baked salmon to a fresh salad made with chickpeas, arugula, herbs and olives</p>
                </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on">
                <img src="../assets/img/item_5.jpg" alt="">
                <div class="menu-item-content p-4">
                    <div>
                    <span class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star-half-stroke"></i>
                    </span> 
                    <span>Rated(2.5)</span>  

                    </div>
                    <h5 class="mt-1 mb-2">Mexican Ole Pizza</h5>
                    <p class="small">Baked salmon to a fresh salad made with chickpeas, arugula, herbs and olives</p>
                </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on">
                <img src="../assets/img/item_6.jpg" alt="">
                <div class="menu-item-content p-4">
                    <div>
                    <span class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star-half-stroke"></i>
                    </span> 
                    <span>Rated(4.5)</span>  

                    </div>
                    <h5 class="mt-1 mb-2">Fudg Chewy Chicken</h5>
                    <p class="small">Baked salmon to a fresh salad made with chickpeas, arugula, herbs and olives</p>
                </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on">
                <img src="../assets/img/item_7.jpg" alt="">
                <div class="menu-item-content p-4">
                    <div>
                    <span class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </span> 
                    <span>Rated(5.0)</span>  

                    </div>
                    <h5 class="mt-1 mb-2">Burger Meat Liquor</h5>
                    <p class="small">Baked salmon to a fresh salad made with chickpeas, arugula, herbs and olives</p>
                </div>
                </div>
            </div>   
            </div>
        </div>
        <div class="tab-pane fade show" id="pills-dinner" role="tabpanel" aria-labelledby="pills-dinner-tab" tabindex="0">
            <div class="row gy-4">
            
            <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on">
                <img src="../assets/img/item_2.jpg" alt="">
                <div class="menu-item-content p-4">
                    <div>
                    <span class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star-half-stroke"></i>
                    </span> 
                    <span>Rated(1.5)</span>  

                    </div>
                    <h5 class="mt-1 mb-2">Italian Pasta Si</h5>
                    <p class="small">Baked salmon to a fresh salad made with chickpeas, arugula, herbs and olives</p>
                </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on">
                <img src="../assets/img/item_3.jpg" alt="">
                <div class="menu-item-content p-4">
                    <div>
                    <span class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star-half-stroke"></i>
                    </span> 
                    <span>Rated(4.5)</span>  

                    </div>
                    <h5 class="mt-1 mb-2">Crispy Circle Potato</h5>
                    <p class="small">Baked salmon to a fresh salad made with chickpeas, arugula, herbs and olives</p>
                </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on">
                <img src="../assets/img/item_4.jpg" alt="">
                <div class="menu-item-content p-4">
                    <div>
                    <span class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </span> 
                    <span>Rated(2.0)</span>  
                    </div>
                    <h5 class="mt-1 mb-2">Wendys Chili Recipe</h5>
                    <p class="small">Baked salmon to a fresh salad made with chickpeas, arugula, herbs and olives</p>
                </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on">
                <img src="../assets/img/item_5.jpg" alt="">
                <div class="menu-item-content p-4">
                    <div>
                    <span class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </span> 
                    <span>Rated(5.0)</span>  
                    </div>
                    <h5 class="mt-1 mb-2">Mexican Ole Pizza</h5>
                    <p class="small">Baked salmon to a fresh salad made with chickpeas, arugula, herbs and olives</p>
                </div>
                </div>
            </div>  
            </div>
        </div>
        </div>
    </div>
    </section>

  <section id="order">
    <div class="container">
        <div class="row">
        <div class="col-12 intro-text">
            <h1>Place Your Order</h1>
            <p>Pick your favourite dishes, fill in your details and we'll get it ready for you.</p>
        </div>
        </div>
        <div class="row justify-content-center">
        <div class="col-lg-8">
            <!-- Menu Items to pick from -->
            <form action="../orders/place.php" method="POST">
            <h5 class="mb-4 text-center" style="color:#222; font-weight:700;">Choose Your Items</h5>
            <div class="row gy-3 mb-5">
            <div class="col-md-6">
                <label class="order-item-label d-flex align-items-center gap-3 p-3 bg-white shadow-on" style="cursor:pointer; border: 2px solid transparent; transition: border .3s;">
                <input type="checkbox" name="items[]" value="1" class="order-check" style="accent-color:#d43076; width:18px; height:18px; flex-shrink:0;">
                <img src="../assets/img/item_1.jpg" style="width:60px; height:60px; object-fit:cover; flex-shrink:0;" alt="">
                <div>
                    <div style="font-weight:600; color:#222;">Bread Greek Salad</div>
                    <div class="small text-muted">Breakfast · $8.99</div>
                </div>
                </label>
            </div>
            <div class="col-md-6">
                <label class="order-item-label d-flex align-items-center gap-3 p-3 bg-white shadow-on" style="cursor:pointer; border: 2px solid transparent; transition: border .3s;">
                <input type="checkbox" name="items[]" value="2" class="order-check" style="accent-color:#d43076; width:18px; height:18px; flex-shrink:0;">
                <img src="../assets/img/item_8.jpg" style="width:60px; height:60px; object-fit:cover; flex-shrink:0;" alt="">
                <div>
                    <div style="font-weight:600; color:#222;">Lobster Roll Grilled</div>
                    <div class="small text-muted">Lunch · $18.50</div>
                </div>
                </label>
            </div>
            <div class="col-md-6">
                <label class="order-item-label d-flex align-items-center gap-3 p-3 bg-white shadow-on" style="cursor:pointer; border: 2px solid transparent; transition: border .3s;">
                <input type="checkbox" name="items[]" value="3" class="order-check" style="accent-color:#d43076; width:18px; height:18px; flex-shrink:0;">
                <img src="../assets/img/item_2.jpg" style="width:60px; height:60px; object-fit:cover; flex-shrink:0;" alt="">
                <div>
                    <div style="font-weight:600; color:#222;">Italian Pasta Si</div>
                    <div class="small text-muted">Dinner · $12.00</div>
                </div>
                </label>
            </div>
            <div class="col-md-6">
                <label class="order-item-label d-flex align-items-center gap-3 p-3 bg-white shadow-on" style="cursor:pointer; border: 2px solid transparent; transition: border .3s;">
                <input type="checkbox" name="items[]" value="4" class="order-check" style="accent-color:#d43076; width:18px; height:18px; flex-shrink:0;">
                <img src="../assets/img/item_3.jpg" style="width:60px; height:60px; object-fit:cover; flex-shrink:0;" alt="">
                <div>
                    <div style="font-weight:600; color:#222;">Crispy Circle Potato</div>
                    <div class="small text-muted">Breakfast · $6.50</div>
                </div>
                </label>
            </div>
            <div class="col-md-6">
                <label class="order-item-label d-flex align-items-center gap-3 p-3 bg-white shadow-on" style="cursor:pointer; border: 2px solid transparent; transition: border .3s;">
                <input type="checkbox" name="items[]" value="5" class="order-check" style="accent-color:#d43076; width:18px; height:18px; flex-shrink:0;">
                <img src="../assets/img/item_5.jpg" style="width:60px; height:60px; object-fit:cover; flex-shrink:0;" alt="">
                <div>
                    <div style="font-weight:600; color:#222;">Mexican Ole Pizza</div>
                    <div class="small text-muted">Dinner · $14.00</div>
                </div>
                </label>
            </div>

            <div class="col-md-6">
                <label class="order-item-label d-flex align-items-center gap-3 p-3 bg-white shadow-on" style="cursor:pointer; border: 2px solid transparent; transition: border .3s;">
                <input type="checkbox" name="items[]" value="6" class="order-check" style="accent-color:#d43076; width:18px; height:18px; flex-shrink:0;">
                <img src="../assets/img/item_6.jpg" style="width:60px; height:60px; object-fit:cover; flex-shrink:0;" alt="">
                <div>
                    <div style="font-weight:600; color:#222;">Fudg Chewy Chicken</div>
                    <div class="small text-muted">Dinner · $11.25</div>
                </div>
                </label>
            </div>
            </div>
            <!-- Order Details Form -->
            <h5 class="mb-4 text-center" style="color:#222; font-weight:700;">Your Details</h5>
            <div class="row g-4">
                <div class="form-group col-md-6">
                <input type="text" name="full_name" class="form-control" placeholder="Full Name" required>
                </div>
                <div class="form-group col-md-6">
                <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                </div>
                <div class="form-group col-md-12">
                <input type="text" name="phone" class="form-control" placeholder="Phone Number" required>
                </div>
                <div class="form-group col-md-12">
                <textarea name="notes" cols="30" rows="3" class="form-control" placeholder="Special requests or notes..."></textarea>
                </div>
                <div class="form-group text-center col-md-12">
                <button type="submit" class="btn btn-brand px-5">
                    <i class="fa-solid fa-bag-shopping me-2"></i>Place Order
                </button>
                </div>
            </div>
            </form>

        </div>
        </div>
    </div>
    <style>
        .order-item-label:has(.order-check:checked) {
        border-color: #d43076 !important;
        background-color: #fff3f8 !important;
        }
        #order .form-control, #order select.form-control {
        border-radius: 0;
        height: 50px;
        transition: border-color .3s;
        }
        #order textarea.form-control {
        height: auto;
        }
        #order .form-control:focus, #order select.form-control:focus {
        border-color: #d43076;
        box-shadow: none;
        }
    </style>
    </section>   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script> 
</body>

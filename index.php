<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Shop</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="index.php#home">TechShop</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-lg-3">
      <li class="nav-item active">
        <a class="nav-link" href="index.php#home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#about">About Us</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          Products
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="phone.php">Phones</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="laptop.php">Laptops</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="gadget.php">Gadgets</a>
        </div>
      </li>
    </ul>
    <ul class="navbar-nav ms-auto">
      <li class="nav-item">
        <a class="nav-link" href="cart.php">
            <i class="bi bi-cart"></i> Cart
            <span id="cart-count" class="badge bg-danger">
            <?php echo isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0; ?>
            </span>
        </a>
      </li>
    </ul>
  </div>
</nav>


<a name="home">
<div class="container mt-4">
    <div class="jumbotron">
        <h1 class="display-4">Welcome to TechShop!</h1>
        <p class="lead">Your one-stop shop for the latest tech gadgets and accessories.</p>
        <hr class="my-4">
        <p>Explore our wide range of products and find the perfect tech for you.</p>
        <a class="btn btn-primary btn-lg" href="#products" role="button">Shop Now</a>
    </div>
</div>
</a>

<br><br>

<a name="about">
<section class="text-center mb-4">
    <h2>About Us</h2>
    <p>At TechShop, we are passionate about technology and committed to providing our customers with the best products and services. Our mission is to make cutting-edge technology accessible to everyone.</p>
    <p>Founded in 2020, we have quickly grown to become a trusted name in the tech industry, known for our wide selection of products, competitive prices, and exceptional customer service.</p>
    <p>Whether you're a tech enthusiast or just looking for the latest gadgets, TechShop has something for you. Join us on our journey to explore the future of technology!</p>
</section>
</a>

<br><br>


<a name="products">
<section class="text-center mb-4">
    <h2>Featured Products</h2>
    <p>Check out some of our top picks!</p>
</section>
</a>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="./Image\mobile 1.webp" class="card-img-top" alt="Phone">
                <div class="card-body">
                    <h5 class="card-title">Latest Smartphones</h5>
                    <p class="card-text">Discover the newest models with cutting-edge features.</p>
                    <a href="phone.php" class="btn btn-primary">View Phones</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="./Image\MSI Thin A15 B7VE.webp" class="card-img-top" alt="Laptop">
                <div class="card-body">
                    <h5 class="card-title">High-Performance Laptops</h5>
                    <p class="card-text">Find laptops that combine power and portability.</p>
                    <a href="laptop.php" class="btn btn-primary">View Laptops</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="./Image\samsung-galaxy-watch8.webp" class="card-img-top" alt="Gadget">
                <div class="card-body">
                    <h5 class="card-title">Innovative Gadgets</h5>
                    <p class="card-text">Explore our collection of the latest tech gadgets.</p>
                    <a href="gadget.php" class="btn btn-primary">View Gadgets</a>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="bg-dark text-white text-center p-3 mt-4">
    <p>&copy; 2024 TechShop. All rights reserved.</p>
</section>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>
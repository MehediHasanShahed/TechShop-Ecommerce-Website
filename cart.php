<?php
session_start();

// Initialize cart if not already
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Handle Add to Cart
if (isset($_POST['add_to_cart'])) {
    $product = [
        'name' => $_POST['product_name'],
        'price' => $_POST['product_price'],
        'image' => $_POST['product_image'] ?? ''
    ];

    // Check if product already exists in cart
    $exists = false;
    foreach ($_SESSION['cart'] as $item) {
        if ($item['name'] === $product['name']) {
            $exists = true;
            break;
        }
    }

    if (!$exists) {
        $_SESSION['cart'][] = $product;
    }

    header("Location: cart.php");
    exit();
}

// Handle Remove from Cart
if (isset($_GET['remove'])) {
    $removeName = $_GET['remove'];
    foreach ($_SESSION['cart'] as $key => $item) {
        if ($item['name'] === $removeName) {
            unset($_SESSION['cart'][$key]);
        }
    }
    $_SESSION['cart'] = array_values($_SESSION['cart']); // Reindex
    header("Location: cart.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart|Tech Shop</title>
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

<div class="container py-5">
    <h1 class="mb-4">🛒 Your Shopping Cart</h1>

    <?php if (!empty($_SESSION['cart'])): ?>
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Product</th>
                    <th>Price (BDT)</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            $total = 0;
            foreach ($_SESSION['cart'] as $item):
                $total += $item['price'];
            ?>
                <tr>
                    <td><?= htmlspecialchars($item['name']) ?></td>
                    <td><?= number_format($item['price'], 2) ?></td>
                    <td>
                        <a href="cart.php?remove=<?= urlencode($item['name']) ?>" class="btn btn-danger btn-sm">
                            Remove
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

        <h4 class="mt-3">Total: <?= number_format($total, 2) ?> BDT</h4>
        <a href="checkout_page.php" class="btn btn-success mt-3">Proceed to Checkout</a>
    <?php else: ?>
        <div class="alert alert-warning">Your cart is empty.</div>
    <?php endif; ?>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>

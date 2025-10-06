<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gadget|Tech Shop</title>
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


<div class="container my-5">
  <div class="row">

    <!-- Product 1 -->
    <div class="col-md-4 mb-4">
      <div class="card">
        <img src="./Image/samsung-galaxy-watch8.webp" class="card-img-top" alt="Watch">
        <div class="card-body">
          <h5 class="card-title">Samsung Galaxy Watch 8 (46 mm)</h5>
          <p class="card-text">40,000 BDT</p>
            <button class="btn btn-primary add-to-cart"
                data-id="13"
                data-name="Samsung Galaxy Watch 8 (46 mm)"
                data-price="40000">
                Add to Cart
            </button>
        </div>
      </div>
    </div>

    <!-- Product 2 -->
    <div class="col-md-4 mb-4">
      <div class="card">
        <img src="./Image/samsung-galaxy-watch-ultra.webp" class="card-img-top" alt="Watch">
        <div class="card-body">
          <h5 class="card-title">Samsung Galaxy Watch Ultra</h5>
          <p class="card-text">60,000 BDT</p>
            <button class="btn btn-primary add-to-cart"
                data-id="14"
                data-name="Samsung Galaxy Watch Ultra"
                data-price="60000">
                Add to Cart
            </button>
        </div>
      </div>
    </div>

    <!-- Product 3 -->
    <div class="col-md-4 mb-4">
      <div class="card">
        <img src="./Image/huawei-watch-gt-4-46-mm-official-image.webp" class="card-img-top" alt="Watch">
        <div class="card-body">
          <h5 class="card-title">Huawei Watch GT 4 (46 mm)</h5>
          <p class="card-text">27,000 BDT</p>
            <button class="btn btn-primary add-to-cart"
                data-id="15"
                data-name="Huawei Watch GT 4 (46 mm)"
                data-price="27000">
                Add to Cart
            </button>
        </div>
      </div>
    </div>

    <!-- Product 4 -->
    <div class="col-md-4 mb-4">
      <div class="card">
        <img src="./Image/huawei-watch-gt-4-41-mm-official-image.webp" class="card-img-top" alt="Watch">
        <div class="card-body">
          <h5 class="card-title">Huawei Watch GT 4 (41 mm)</h5>
          <p class="card-text">26,000 BDT</p>
            <button class="btn btn-primary add-to-cart"
                data-id="16"
                data-name="Huawei Watch GT 4 (41 mm)"
                data-price="26000">
                Add to Cart
            </button>
        </div>
      </div>
    </div>

    <!-- Product 5 -->
    <div class="col-md-4 mb-4">
      <div class="card">
        <img src="./Image/apple-watch-ultra-2-blue-ocean-official-image.webp" class="card-img-top" alt="Watch">
        <div class="card-body">
          <h5 class="card-title">Apple Watch Ultra 2 (49 mm)</h5>
          <p class="card-text">92,000 BDT</p>
            <button class="btn btn-primary add-to-cart"
                data-id="17"
                data-name="Apple Watch Ultra 2 (49 mm)"
                data-price="92000">
                Add to Cart
            </button>
        </div>
      </div>
    </div>

    <!-- Product 6 -->
    <div class="col-md-4 mb-4">
      <div class="card">
        <img src="./Image/apple-watch-series-10-slate-official-image.webp" class="card-img-top" alt="Watch">
        <div class="card-body">
          <h5 class="card-title">Apple Watch Series 10 (46 mm)</h5>
          <p class="card-text">51,000 BDT</p>
            <button class="btn btn-primary add-to-cart"
                data-id="18"
                data-name="Apple Watch Series 10 (46 mm)"
                data-price="51000">
                Add to Cart
            </button>
        </div>
      </div>
    </div>

  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
document.querySelectorAll('.add-to-cart').forEach(button => {
  button.addEventListener('click', function () {
    const id = this.dataset.id;
    const name = this.dataset.name;
    const price = this.dataset.price;

    fetch('add_to_cart.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded'
      },
      body: `id=${encodeURIComponent(id)}&name=${encodeURIComponent(name)}&price=${encodeURIComponent(price)}`
    })
    .then(response => response.json())
    .then(data => {
      if (data.success) {
        alert(`${name} added to cart!`);

        // 🛒 Update cart count badge in navbar if exists
        const badge = document.querySelector('#cart-count');
        if (badge) badge.textContent = data.cartCount;
      } else {
        alert('Failed to add item.');
      }
    })
    .catch(() => alert('Error adding item to cart.'));
  });
});
</script>

<section class="bg-dark text-white text-center p-3 mt-4">
    <p>&copy; 2024 TechShop. All rights reserved.</p>
</section>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>
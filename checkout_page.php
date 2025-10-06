<?php
session_start();
$cart = $_SESSION['cart'] ?? [];
$total = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Checkout</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h1 class="mb-4 text-center">Checkout</h1>

    <?php if (empty($cart)): ?>
        <div class="alert alert-warning text-center">Your cart is empty.</div>
        <div class="text-center">
            <a href="index.php" class="btn btn-primary">⬅ Back to Shop</a>
        </div>
    <?php else: ?>
        <div class="card shadow">
            <div class="card-body">
                <table class="table table-bordered align-middle mb-4">
                    <thead class="table-light">
                        <tr>
                            <th>Product</th>
                            <th>Price (BDT)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($cart as $item): ?>
                            <tr>
                                <td><?= htmlspecialchars($item['name']) ?></td>
                                <td><?= number_format($item['price'], 2) ?></td>
                            </tr>
                            <?php $total += $item['price']; ?>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr class="table-secondary">
                            <th>Total</th>
                            <th><?= number_format($total, 2) ?> BDT</th>
                        </tr>
                    </tfoot>
                </table>

                <div class="text-center">
                    <a href="index.php" class="btn btn-primary btn-lg">⬅ Back to Shop</a>
                    <a href="checkout.php" class="btn btn-success btn-lg">💾 Download Invoice (PDF)</a>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>

</body>
</html>
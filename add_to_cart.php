<?php
session_start();

$id = $_POST['id'] ?? null;
$name = $_POST['name'] ?? null;
$price = $_POST['price'] ?? 0;

if (!$id || !$name) {
    echo json_encode(['success' => false]);
    exit;
}

// Ensure price is numeric
$price = is_numeric($price) ? (float)$price : 0;

// Initialize cart
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Add item
$_SESSION['cart'][] = [
    'id' => $id,
    'name' => $name,
    'price' => $price
];

echo json_encode([
    'success' => true,
    'cartCount' => count($_SESSION['cart'])
]);

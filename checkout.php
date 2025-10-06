<?php
session_start();
require __DIR__ . '/vendor/autoload.php'; // Load TCPDF library


// Get cart data
$cart = $_SESSION['cart'] ?? [];
if (empty($cart)) {
    die("Your cart is empty!");
}

// Clean any previous output to prevent header issues
if (ob_get_length()) ob_end_clean();

// Set headers to open PDF inline (in browser)
header('Content-Type: pdf');
header('Content-Disposition: inline; filename="invoice.pdf"');
header('Cache-Control: private, max-age=0, must-revalidate');
header('Pragma: public');

// Create PDF
$pdf = new TCPDF();
$pdf->AddPage();
$pdf->SetFont('helvetica', '', 12);

// Invoice Title
$pdf->Cell(0, 10, 'Invoice', 0, 1, 'C');
$pdf->Ln(5);

// Table Header
$pdf->SetFont('helvetica', 'B', 12);
$pdf->Cell(120, 10, 'Product', 1, 0, 'C');
$pdf->Cell(40, 10, 'Price (BDT)', 1, 1, 'C');
$pdf->SetFont('helvetica', '', 12);

// Table Rows
$total = 0;
foreach ($cart as $item) {
    $pdf->Cell(120, 10, $item['name'], 1);
    $pdf->Cell(40, 10, number_format($item['price'], 2), 1, 1);
    $total += $item['price'];
}

// Total Row
$pdf->SetFont('helvetica', 'B', 12);
$pdf->Cell(120, 10, 'Total', 1);
$pdf->Cell(40, 10, number_format($total, 2), 1, 1);

// Thank You Message
$pdf->Ln(10);
$pdf->SetFont('helvetica', '', 11);
$pdf->Cell(0, 10, 'Thank you for shopping with TechShop!', 0, 1, 'C');

// Clear Cart
unset($_SESSION['cart']);

// Output inline (show in browser)
$pdf->Output('invoice.pdf', 'I');
exit;

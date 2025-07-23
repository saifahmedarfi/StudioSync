<?php
// booking_form.php

// ✅ Load FPDF
require_once('../libs/fpdf/fpdf.php');

// ✅ Dummy booking data (replace with DB values later)
$artistName = "Saif Ahmed";
$bookingDate = date("d M Y");
$hirerName = "ABC Events Ltd.";
$fee = "$300";

// ✅ If download is requested, generate the PDF
if (isset($_GET['download'])) {
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);
    $pdf->Cell(0,10,"StudioSync Booking Invoice", 0,1,'C');
    $pdf->Ln(10);

    $pdf->SetFont('Arial','',12);
    $pdf->Cell(0,10,"Hirer: $hirerName", 0,1);
    $pdf->Cell(0,10,"Artist: $artistName", 0,1);
    $pdf->Cell(0,10,"Booking Date: $bookingDate", 0,1);
    $pdf->Cell(0,10,"Performance Fee: $fee", 0,1);

    // Output the PDF for download
    $pdf->Output("D", "Booking_Invoice.pdf");
    exit;
}
?>

<!-- ✅ HTML Booking Invoice Display -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Booking Invoice | StudioSync</title>
  <style>
    body {
      background-color: #121212;
      color: #fff;
      font-family: 'Inter', sans-serif;
      padding: 2rem;
    }

    .invoice-box {
      background: #1e1e1e;
      padding: 2rem;
      border-radius: 12px;
      max-width: 600px;
      margin: auto;
      box-shadow: 0 0 15px rgba(255, 255, 255, 0.05);
    }

    h1 {
      text-align: center;
      margin-bottom: 1.5rem;
    }

    .invoice-details p {
      margin: 0.5rem 0;
      font-size: 1rem;
    }

    .btn-download {
      display: block;
      margin: 2rem auto 0;
      padding: 0.8rem 2rem;
      font-size: 1rem;
      border: none;
      border-radius: 25px;
      background: white;
      color: #121212;
      font-weight: bold;
      cursor: pointer;
      transition: background 0.3s;
      text-decoration: none;
      text-align: center;
    }

    .btn-download:hover {
      background: #f7bc5e;
      color: #121212;
    }
  </style>
</head>
<body>
  <div class="invoice-box">
    <h1>Booking Invoice</h1>
    <div class="invoice-details">
      <p><strong>Hirer:</strong> <?= htmlspecialchars($hirerName) ?></p>
      <p><strong>Artist:</strong> <?= htmlspecialchars($artistName) ?></p>
      <p><strong>Date:</strong> <?= htmlspecialchars($bookingDate) ?></p>
      <p><strong>Fee:</strong> <?= htmlspecialchars($fee) ?></p>
    </div>
    <a href="booking_form.php?download=1" class="btn-download">Download Invoice as PDF</a>
  </div>
</body>
</html>

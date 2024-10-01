<?php
require('fpdf/fpdf.php');
session_start();

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(40, 10, 'Hall Ticket for ' . $_SESSION['username']);
$pdf->Output('D', 'HallTicket.pdf');
?>

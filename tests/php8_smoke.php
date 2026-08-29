<?php

error_reporting(E_ALL);

require dirname(__DIR__) . '/includes/turso_mysql_compat.php';

$result = mysql_query('SELECT COUNT(*) AS total FROM college_details');
if (!$result) {
    throw new RuntimeException(mysql_error());
}

$row = mysql_fetch_array($result);
if ((int) $row['total'] !== 39) {
    throw new RuntimeException('Unexpected college count from Turso.');
}

session_id('php8SmokeTest');
session_start();
$_SESSION['smoke_test'] = 'passed';
session_write_close();
session_start();
if (!isset($_SESSION['smoke_test']) || $_SESSION['smoke_test'] !== 'passed') {
    throw new RuntimeException('Turso session round trip failed.');
}
session_destroy();

chdir(dirname(__DIR__) . '/content');
require 'create_result.php';

$pdf = new PDF_result();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(100, 20, 'PHP 8 PDF smoke test');
$contents = $pdf->Output('', 'S');

if (substr($contents, 0, 4) !== '%PDF') {
    throw new RuntimeException('FPDF did not generate a PDF document.');
}

echo "PHP 8 smoke tests passed.\n";


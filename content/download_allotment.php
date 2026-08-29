<?php
require 'session.php';

if (!loggedin() || empty($_SESSION['email'])) {
    header('Location: index.php');
    exit;
}

require 'connect.inc.php';

$email = str_replace("'", "''", $_SESSION['email']);
$sql = "SELECT cd.candidate_name, cd.rank, rd.enrolment_no, cp.pref_1, cp.pref_2, cp.pref_3, "
    . "p1.college_name AS pref_1_name, p2.college_name AS pref_2_name, p3.college_name AS pref_3_name, "
    . "allocated.college_name AS allocated_name, sa.seqnc_no "
    . "FROM candidate_details cd "
    . "JOIN rank_details rd ON rd.rank = cd.rank "
    . "JOIN candidate_preferences cp ON cp.rank = cd.rank "
    . "JOIN seat_allotments sa ON sa.rank = cd.rank "
    . "JOIN college_details p1 ON p1.college_cuid = cp.pref_1 "
    . "JOIN college_details p2 ON p2.college_cuid = cp.pref_2 "
    . "JOIN college_details p3 ON p3.college_cuid = cp.pref_3 "
    . "JOIN college_details allocated ON allocated.college_cuid = sa.allot_clg_id "
    . "WHERE cd.email = '$email' AND sa.allot_clg_id > 0";

$result = mysql_query($sql);
$allotment = $result ? mysql_fetch_array($result) : false;

if (!$allotment) {
    http_response_code(404);
    echo 'No downloadable allotment is available.';
    exit;
}

require 'create_result.php';

$pdf = new PDF_result();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 12);
$pdf->SetY(100);
$pdf->Cell(105, 13, 'Candidate Details');
$pdf->SetFont('Arial', '');
$pdf->Cell(250, 13, $allotment['candidate_name']);
$pdf->SetFont('Arial', 'B');
$pdf->Cell(50, 13, 'Date:');
$pdf->SetFont('Arial', '');
$pdf->Cell(100, 13, date('F j, Y, g:i a'), 0, 1);
$pdf->SetFont('Arial', 'I');
$pdf->SetX(140);
$pdf->Cell(200, 15, $_SESSION['email'], 0, 2);
$pdf->Cell(200, 15, 'Rank: ' . $allotment['rank'] . ' , Enrollment No: ' . $allotment['enrolment_no'], 0, 2);
$pdf->Ln(100);
$pdf->Generate_Table(
    array('1st Preference', '2nd Preference', '3rd Preference', 'Allocated College', 'Secure Sequence'),
    array(
        $allotment['pref_1_name'],
        $allotment['pref_2_name'],
        $allotment['pref_3_name'],
        $allotment['allocated_name'],
        $allotment['seqnc_no'],
    )
);
$pdf->Ln(65);
$pdf->MultiCell(0, 25, 'Congratulations, you have successfully been allocated a seat in the college/university shown above.');

$safeName = preg_replace('/[^a-zA-Z0-9_-]+/', '_', $allotment['candidate_name']);
$filename = $safeName . '_' . $allotment['rank'] . '.pdf';
$pdf->Output($filename, 'D');
exit;


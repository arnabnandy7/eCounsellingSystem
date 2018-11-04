<?php 

date_default_timezone_set('Asia/Kolkata');
require('fpdf/fpdf.php');

class PDF_result extends FPDF {
	function __construct ($orientation = 'P', $unit = 'pt', $format = 'Letter', $margin = 40) {
		$this->FPDF($orientation, $unit, $format);
		$this->SetTopMargin($margin);
		$this->SetLeftMargin($margin);
		$this->SetRightMargin($margin);
		
		$this->SetAutoPageBreak(true, $margin);
	}
	
	function Header () {
	     $this->Image('images/1logoo.jpg',100,15,250);

	//	$this->SetFont('Arial', 'B', 20);
	//	$this->SetFillColor(36, 96, 84);
	//	$this->SetTextColor(225);
	//	$this->Cell(0, 30, "YouHack MCQ Results", 0, 1, 'C', true);
	}
	
 function Footer()
{
    //Position at 1.5 cm from bottom
    $this->SetY(-15);
    //Arial italic 8
    $this->SetFont('Arial','I',10);
    //Page number
    $this->Cell(0,2,'Generated at ecounselling System',0,0,'C');
}

	
function Generate_Table($subjects, $marks) {
	$this->SetFont('Arial', 'B', 12);
	$this->SetTextColor(0);
//	$this->SetFillColor(94, 188, z);
$this->SetFillColor(94, 188, 225);
	$this->SetLineWidth(1);
	$this->Cell(525, 25, "Seat Allotment Result", 'LTR', 1, 'C', true);
	//$this->Cell(100, 25, "Marks", 'LTR', 1, 'C', true);
	 
	$this->SetFont('Arial', '');
	$this->SetFillColor(238);
	$this->SetLineWidth(0.2);
	$fill = false;
	
	for ($i = 0; $i < count($subjects); $i++) {
		$this->Cell(150, 30, $subjects[$i], 1, 0, 'L', $fill);
		$this->Cell(374, 30,  $marks[$i], 1, 1, 'R', $fill);
		$fill = !$fill;
	}
	$this->SetX(367);
	//$this->Cell(100, 20, "Total", 1);
//	$this->Cell(100, 20,  array_sum($marks), 1, 1, 'R');
}	
	
}
<?php
error_reporting(E_ALL);
require_once('TCPDF/tcpdf.php');

//construct a new tcpdf object
$pdf = new TCPDF();

// add a page
$pdf->AddPage();

//assign text
$text = "Hello PDF! the first PDF.....This pdf page make by Rubel Hossain";

$pdf->Write(20,$text);

///save the pdf 
$pdf->Output('sample.pdf', 'I');


?>
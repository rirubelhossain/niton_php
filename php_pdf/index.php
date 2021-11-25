<?php
error_reporting(E_ALL);
require_once('TCPDF/tcpdf.php');

//construct a new tcpdf object
$pdf = new TCPDF();
///how to use barcode in pdf page

//set document meta information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Niton');
$pdf->SetTitle('OOP PHP');
$pdf->SetSubject('Make pdf with HTML');
$pdf->SetKeywords('TCPDF, PDF , PHP');

//set margins

$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);

$pdf->Ln() ;
//new style
$style = array(
    'border' => 2 ,
    'padding' => 'auto' ,
    'fgcolor' => array(0,0,255),
    'bgcolor' => array(255,255,64)
);

// ADD A PAGE
$pdf->AddPage();

$text = 'HDOC Generate PDF with Barcode using TCPDF HDOC ';
$pdf->Write(20 , $text) ;
$pdf->Ln();
//CODE 128 C
$pdf->Cell(0,0,'ÇODE 128 C', 0 , 1 );
$pdf->write1DBarcode('12356789', 'C128C' , '','','', 18, 0.4 , $style, 'N');

$pdf->Ln();
//EAN 8 
$pdf->Cell(0,0,'EAN 8 ' , 0 , 1);
$pdf->write1DBarcode('1234567', 'EAN8', '','','', 18 , 0.4, $style , 'N');


$pdf->Ln() ;
//EAN 13
$pdf->Cell(0,0,'EAN 13 ' , 0 , 1);
$pdf->write1DBarcode('1234567890128', 'EAN13', '','','', 18 , 0.4, $style , 'N');



// QRCODE , H : QR-CODE Best error correction
$pdf->write2DBarcode('www.tappware.org', 'QRCODE,H', 12 , 140, 50 , 50 , $style,'N');
$pdf->Text(12 , 190 , 'TAPPWARE');
$pdf->Output('sample_pdf_barcode.pdf', 'I');

 


?>
<?php

    /**
     * liberias para generar el PDF y QR
     */
    require_once('./public/libs/fpdf/fpdf.php');
    // require_once("./public/lib/phpqrcode/qrlib.php");

    $nombre = "kevin quispe lima =";

    //INICIANDO CON LA HOJA EN BLANCO
    $pdf = new FPDF('L','mm','A4');
    $pdf->AddPage();
    
    //NOMBRE DEL USUARIO CERTIFICADO
    $pdf->SetFont('Arial','B',16);
    $pdf->SetY(93);
    $pdf->Cell(63);
    $pdf->Cell(210, 9, $_GET["r"], 0, 1, 'C'); 

    $pdf->Output();
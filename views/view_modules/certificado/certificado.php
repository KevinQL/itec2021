<?php

    /**
     * liberias para generar el PDF y QR
     */
    require_once('./public/libs/fpdf/fpdf.php');
    // require_once("./public/lib/phpqrcode/qrlib.php");


    //VARIABLES OBTENIDAS
    $dni = $_GET['code'];
    $idcertificados_temp = $_GET['idcert_temp']; 
    $fondo_certi = "public/certificados/v1.jpg";


    $ObjCerti = new adminController();

    $estudent = $ObjCerti -> getEstudentTempItec_Controller($idcertificados_temp)["data"][0];
    // echo json_encode($estudent);
    $estudent = json_decode(json_encode($estudent));
    // var_dump($reg[0]->registro);

    // die();

    $pdf = new FPDF('L','mm','A4');
    $pdf->AddPage();

    // IMAGEN FONDO DEL CERTIFICADO
    $pdf->Image("./{$fondo_certi}", 0, 0, 300, 211);

    // CODE QR DEL DNI EN ELCERTIFICADO
    // $pdf->Image("test.png", 28, 17, 35, 35,"png");
    // $pdf->Image("http://localhost/sutea2021-covid/?pg=certificado/test-qr&code=$dni", 28, 17, 35, 35,"png");
    $pdf->Image("https://cersutea.com/cersutea/?pg=certificado/test-qr&code=$dni", 11, 32, 35, 35, "png");

    //NOMBRE DEL USUARIO CERTIFICADO
    $pdf->SetFont('Arial','B',16);
    $pdf->SetY(105);
    $pdf->Cell(63);
    $pdf->Cell(210, 9, $estudent->nombre_apellido, 0, 1, 'C');

    //NIVEL DEL USUARIO CERTIFICADO
    $pdf->SetFont('Arial','B',14);
    $pdf->SetY(103);
    $pdf->Cell(82);
    $pdf->Cell(51, 7, $estudent->nivel, 0, 1, 'C');

    //TIPO DEL USUARIO CERTIFICADO
    $pdf->SetFont('Arial','B',14);
    $pdf->SetY(103);
    $pdf->Cell(236);
    $pdf->Cell(44, 7, $estudent->registro, 0, 1, 'C');

    // LINK DE REFERENCIA DEL CERTIFICADO
    $pdf->SetFont('Times','B',8);
    $pdf->Text(10, 206, "Verificar certificado digital en ");
    $pdf->SetTextColor(0,0,255);
    $pdf->SetFont('','U');
    $pdf->Text(48, 206, "https://cersutea.com/cersutea/?pg=certification");


    $pdf->Output();








    //----------------------------------------------------------------------------------------
    //----------------------------------------------------------------------------------------
    //----------------------------------------------------------------------------------------

    /**
     * FUNCION PARA CORREGIR TILDE Y PONER EN MAYUSCULA EL TEXTO QUE SE ENVIÉ POR PARAMETRO.
     */
    function txt_certi($txt){
        return strtoupper(utf8_decode($txt));
    }


?>
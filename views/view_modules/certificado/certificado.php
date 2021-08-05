<?php

    /**
     * liberias para generar el PDF y QR
     */
    require_once('./public/libs/fpdf/fpdf.php');
    // require_once("./public/lib/phpqrcode/qrlib.php");


    //VARIABLES OBTENIDAS
    $dni = $_GET['code'];
    $idcertificados_temp = $_GET['idcert_temp'];


    $ObjCerti = new adminController();

    $estudent = $ObjCerti -> getEstudentTempItec_Controller($idcertificados_temp);


    echo json_encode($estudent);







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
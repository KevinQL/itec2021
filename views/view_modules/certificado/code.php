<?php

    error_reporting(1);
    // require_once('./public/libs/fpdf/fpdf.php');
    require_once("./public/libs/phpqrcode/qrlib.php");

    // echo "left code";
    
    QRcode::png($_GET['code']);



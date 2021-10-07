<?php

    // Espace of practice
    // echo intval('02');
    // echo intval('2');
    // echo intval(02);
    // echo intval(2);

    // var_dump(explode("/","07/12/2021"));
    // die();

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
    
    /**
     * we use the function that is returning us the data with the values of the position for very element of the person object
     */
    $response_datacerti = dataCertificadoPDF($estudent->curso);
    $elcerti_ = $response_datacerti['data'];

    $fondo_certi = "public/certificados/" . $elcerti_['pdf'];
    
    // var_dump($response_datacerti['eval']);
    // var_dump($elcerti_['curso']);
    // die();

    // if($response_datacerti['eval']){}else{echo "Contactese con el administrador";}

    $pdf = new FPDF('L','mm','A4');
    $pdf->AddPage();

    // IMAGEN FONDO DEL CERTIFICADO
    $pdf->Image("./{$fondo_certi}", 0, 0, 300, 211);

    // CODE QR DEL DNI EN ELCERTIFICADO
    // $pdf->Image("test.png", 28, 17, 35, 35,"png");
    // $pdf->Image("http://localhost/itec2021/?pg=modules/certificado/code?&code=$dni", 28, 17, 35, 35,"png");

    //NOMBRE DEL USUARIO CERTIFICADO
    $px = $elcerti_['person'][0]; 
    $py = $elcerti_['person'][1];
    $pdf->SetFont('Arial','B',20);
    $pdf->SetY($py);
    $pdf->Cell($px);
    $pdf->Cell(210, 9, txt_certi($estudent->nombre_apellido), 1, 1, 'C');

    //NOTA USUARIO CERTIFICADO
    $px = $elcerti_['nota'][0]; 
    $py = $elcerti_['nota'][1];
    $pdf->SetFont('Arial','B',20);
    $pdf->SetY($py);
    $pdf->Cell($px);
    $pdf->Cell(17, 9, $estudent->nota, 1, 1, 'C');

    //HORAS USUARIO CERTIFICADO
    $px = $elcerti_['horas'][0]; 
    $py = $elcerti_['horas'][1];
    $pdf->SetFont('Arial','B',15);
    $pdf->SetY($py);
    $pdf->Cell($px);
    $pdf->Cell(33, 9, $estudent->horas, 1, 1, 'C');

    // FECHA DEL CURSO INICIO
    $fc_inicio = obtenerFechaImprimir($estudent->fecha_inicio);

    $px = $elcerti_['fc_inicio'][0][0]; 
    $py = $elcerti_['fc_inicio'][0][1]; 
    $pdf->SetFont('Arial','B',14);
    $pdf->Text($px, $py, $fc_inicio['d']);

    $px = $elcerti_['fc_inicio'][1][0]; 
    $py = $elcerti_['fc_inicio'][1][1]; 
    $pdf->SetFont('Arial','B',14);
    $pdf->Text($px, $py, $fc_inicio['m']);

    // $px = $elcerti_['fc_inicio'][2][0]; 
    // $py = $elcerti_['fc_inicio'][2][1]; 
    // $pdf->SetFont('Arial','B',14);
    // $pdf->Text($px, $py, '20' . $fc_inicio['y']);


    // FECHA DEL CURSO FIN
    $fc_fin = obtenerFechaImprimir($estudent->fecha_fin);

    $px = $elcerti_['fc_fin'][0][0]; 
    $py = $elcerti_['fc_fin'][0][1]; 
    $pdf->SetFont('Arial','B',14);
    $pdf->Text($px, $py, $fc_inicio['d']);

    $px = $elcerti_['fc_fin'][1][0]; 
    $py = $elcerti_['fc_fin'][1][1]; 
    $pdf->SetFont('Arial','B',14);
    $pdf->Text($px, $py, $fc_fin['m']);

    $px = $elcerti_['fc_fin'][2][0]; 
    $py = $elcerti_['fc_fin'][2][1]; 
    $pdf->SetFont('Arial','B',14);
    $pdf->Text($px, $py, '20' . $fc_fin['y']);
    

    // FECHA DE EMISIÓN DEL CERTIFICADO
    $f_emision = obtenerFechaImprimir($estudent->fecha_emision);
    $px = $elcerti_['f_emision'][0]; 
    $py = $elcerti_['f_emision'][1]; 
    $pdf->SetFont('Arial','B',14);
    $pdf->Text($px, $py, $f_emision['d'] . ' de ' . $f_emision['m'] . ' del 20' . $f_emision['y'] );

    // REGISTRO DEL CERTIFICADO
    $px = $elcerti_['registro'][0]; 
    $py = $elcerti_['registro'][1]; 
    $pdf->SetFont('Arial','B',14);
    $pdf->Text($px, $py, $estudent->registro);

    // LINK DE REFERENCIA DEL CERTIFICADO
    // $pdf->SetFont('Times','B',8);
    // $pdf->Text(17, 202, "Verificar certificado digital en ");
    // $pdf->SetTextColor(0,0,255);
    // $pdf->SetFont('','U');
    // $pdf->Text(56, 202, "https://eltecnologico.com.pe/Web/?pg=certificado_digital");


    $pdf->Output();








    //----------------------------------------------------------------------------------------
    //----------------------------------------------------------------------------------------
    //----------------------------------------------------------------------------------------


    /**
     * 
     */
    function obtenerFechaImprimir($date){
        $arrDate = explode('/',$date);
        $d = $arrDate[0];
        $m = numMesToMes($arrDate[1]);
        $y = $arrDate[2];

        return ['d'=>$d,'m'=>$m,'y'=>$y];
    }

    /**
     * Convierte de numero de mes a leter mes
     */
    function numMesToMes($numMes){
        $numMes = intval($numMes);
        $meses = [   
            1=>'enero',
            2=>'febrero',
            3=>'marzo',
            4=>'abril',
            5=>'mayo',
            6=>'junio',
            7=>'julio',
            8=>'agosto',
            9=>'septiembre',
            10=>'octubre',
            11=>'noviembre',
            12=>'diciembre'
        ];

        return $meses[$numMes];

    }

    /**
     * 
     */
    function dataCertificadoPDF($loremCurso){

        // $loremCurso = "asistente administrativo";

        $arr_certificadosPDF = array(
              [ 'person'=>[63, 108], 'nota'=>[195,116], 'horas'=>[185,125], 'fc_inicio'=>[[265,130.5],[75,137],[90,137]], 'fc_fin'=>[[94.5,137],[105,137],[126,137]],  'f_emision'=>[232,162.5], 'registro'=>[25,195], 'pdf'=>'1_aa.jpg', 'curso'=>"ASISTENTE ADMINISTRATIVO", 'coursedb'=>"ASISTENTE ADMINISTRATIVO" ], 
              [ 'person'=>[0,0], 'nota'=>[0,0], 'horas'=>[0,0], 'fc_inicio'=>[[0,0],[0,0],[0,0]], 'fc_fin'=>[[0,0],[0,0],[0,0]],  'f_emision'=>[0,0], 'registro'=>[0,0], 'pdf'=>'2_c.jpg', 'curso'=>"CANVA", 'coursedb'=>"CANVA" ],
              [ 'person'=>[0,0], 'nota'=>[0,0], 'horas'=>[0,0], 'fc_inicio'=>[[0,0],[0,0],[0,0]], 'fc_fin'=>[[0,0],[0,0],[0,0]],  'f_emision'=>[0,0], 'registro'=>[0,0], 'pdf'=>'3_di.jpg', 'curso'=>"DIAPOSITIVAS IMPACTANTES", 'coursedb'=>"DIAPOSITIVAS IMPACTANTES" ],
              [ 'person'=>[0,0], 'nota'=>[0,0], 'horas'=>[0,0], 'fc_inicio'=>[[0,0],[0,0],[0,0]], 'fc_fin'=>[[0,0],[0,0],[0,0]],  'f_emision'=>[0,0], 'registro'=>[0,0], 'pdf'=>'4_ea.jpg', 'curso'=>"EXCEL AVANZADO", 'coursedb'=>"EXCEL AVANZADO" ],
              [ 'person'=>[0,0], 'nota'=>[0,0], 'horas'=>[0,0], 'fc_inicio'=>[[0,0],[0,0],[0,0]], 'fc_fin'=>[[0,0],[0,0],[0,0]],  'f_emision'=>[0,0], 'registro'=>[0,0], 'pdf'=>'5_eb.jpg', 'curso'=>"EXCEL BÁSICO", 'coursedb'=>"EXCEL BÁSICO" ],
              [ 'person'=>[0,0], 'nota'=>[0,0], 'horas'=>[0,0], 'fc_inicio'=>[[0,0],[0,0],[0,0]], 'fc_fin'=>[[0,0],[0,0],[0,0]],  'f_emision'=>[0,0], 'registro'=>[0,0], 'pdf'=>'6_ei.jpg', 'curso'=>"EXCEL INTERMEDIO", 'coursedb'=>"EXCEL INTERMEDIO" ],
              [ 'person'=>[0,0], 'nota'=>[0,0], 'horas'=>[0,0], 'fc_inicio'=>[[0,0],[0,0],[0,0]], 'fc_fin'=>[[0,0],[0,0],[0,0]],  'f_emision'=>[0,0], 'registro'=>[0,0], 'pdf'=>'7_f.jpg', 'curso'=>"FILMORA", 'coursedb'=>"FILMORA" ],
              [ 'person'=>[0,0], 'nota'=>[0,0], 'horas'=>[0,0], 'fc_inicio'=>[[0,0],[0,0],[0,0]], 'fc_fin'=>[[0,0],[0,0],[0,0]],  'f_emision'=>[0,0], 'registro'=>[0,0], 'pdf'=>'8_ib.jpg', 'curso'=>"INGLES BÁSICO", 'coursedb'=>"INGLES BÁSICO" ],
              [ 'person'=>[0,0], 'nota'=>[0,0], 'horas'=>[0,0], 'fc_inicio'=>[[0,0],[0,0],[0,0]], 'fc_fin'=>[[0,0],[0,0],[0,0]],  'f_emision'=>[0,0], 'registro'=>[0,0], 'pdf'=>'9_qb.jpg', 'curso'=>"QUECHUA BÁSICO", 'coursedb'=>"QUECHUA BÁSICO" ],
              [ 'person'=>[0,0], 'nota'=>[0,0], 'horas'=>[0,0], 'fc_inicio'=>[[0,0],[0,0],[0,0]], 'fc_fin'=>[[0,0],[0,0],[0,0]],  'f_emision'=>[0,0], 'registro'=>[0,0], 'pdf'=>'10_sa.jpg', 'curso'=>"SIAF - ADMINISTRATIVO", 'coursedb'=>"SIAF - ADMINISTRATIVO" ],
              [ 'person'=>[0,0], 'nota'=>[0,0], 'horas'=>[0,0], 'fc_inicio'=>[[0,0],[0,0],[0,0]], 'fc_fin'=>[[0,0],[0,0],[0,0]],  'f_emision'=>[0,0], 'registro'=>[0,0], 'pdf'=>'11_s.jpg', 'curso'=>"SIGA", 'coursedb'=>"SIGA" ],
              [ 'person'=>[0,0], 'nota'=>[0,0], 'horas'=>[0,0], 'fc_inicio'=>[[0,0],[0,0],[0,0]], 'fc_fin'=>[[0,0],[0,0],[0,0]],  'f_emision'=>[0,0], 'registro'=>[0,0], 'pdf'=>'12_ta.jpg', 'curso'=>"TIC AVANZADO", 'coursedb'=>"TIC AVANZADO" ],
              [ 'person'=>[0,0], 'nota'=>[0,0], 'horas'=>[0,0], 'fc_inicio'=>[[0,0],[0,0],[0,0]], 'fc_fin'=>[[0,0],[0,0],[0,0]],  'f_emision'=>[0,0], 'registro'=>[0,0], 'pdf'=>'13_tb.jpg', 'curso'=>"TIC BÁSICO", 'coursedb'=>"TIC BÁSICO" ],
              [ 'person'=>[0,0], 'nota'=>[0,0], 'horas'=>[0,0], 'fc_inicio'=>[[0,0],[0,0],[0,0]], 'fc_fin'=>[[0,0],[0,0],[0,0]],  'f_emision'=>[0,0], 'registro'=>[0,0], 'pdf'=>'14_ti.jpg', 'curso'=>"TIC INTERMEDIO", 'coursedb'=>"TIC INTERMEDIO" ],
              [ 'person'=>[0,0], 'nota'=>[0,0], 'horas'=>[0,0], 'fc_inicio'=>[[0,0],[0,0],[0,0]], 'fc_fin'=>[[0,0],[0,0],[0,0]],  'f_emision'=>[0,0], 'registro'=>[0,0], 'pdf'=>'15_wa.jpg', 'curso'=>"WORD AVANZADO", 'coursedb'=>"WORD AVANZADO" ],
              [ 'person'=>[0,0], 'nota'=>[0,0], 'horas'=>[0,0], 'fc_inicio'=>[[0,0],[0,0],[0,0]], 'fc_fin'=>[[0,0],[0,0],[0,0]],  'f_emision'=>[0,0], 'registro'=>[0,0], 'pdf'=>'16_wb.jpg', 'curso'=>"WORD BÁSISCO", 'coursedb'=>"WORD BÁSISCO" ],
              [ 'person'=>[0,0], 'nota'=>[0,0], 'horas'=>[0,0], 'fc_inicio'=>[[0,0],[0,0],[0,0]], 'fc_fin'=>[[0,0],[0,0],[0,0]],  'f_emision'=>[0,0], 'registro'=>[0,0], 'pdf'=>'17_wi.jpg', 'curso'=>"WORD INTERMEDIO", 'coursedb'=>"WORD INTERMEDIO" ],
              [ 'person'=>[63,108], 'nota'=>[200,118], 'horas'=>[160,125], 'fc_inicio'=>[[265,130.5],[75,137],[90,137]], 'fc_fin'=>[[94.5,137],[105,137],[126,137]],  'f_emision'=>[232,162.5], 'registro'=>[25,195], 'pdf'=>'0_dtic.jpg', 'curso'=>"TECNOLOGÍAS DE LA INFORMACIÓN Y LA COMUNICACIÓN PARA LA EDUCACIÓN VIRTUAL", 'coursedb'=>"TECNOLOGÍAS DE LA INFORMACIÓN Y LA COMUNICACIÓN PARA LA EDUCACIÓN VIRTUAL" ]
        );
    
        $response = [];
        $eval = false;
        $loremCurso = trim(strtoupper($loremCurso));
    
        foreach($arr_certificadosPDF as $element)
        {   
            if(strpos($loremCurso, $element['curso'] ) !== false){
                $eval = true;
                $response = $element;
                // var_dump($element['curso']);
                break;
            }
        }    

        return ["eval"=>$eval, "data"=>$response];
    }



    /**
     * FUNCION PARA CORREGIR TILDE Y PONER EN MAYUSCULA EL TEXTO QUE SE ENVIÉ POR PARAMETRO.
     */
    function txt_certi($txt){
        return strtoupper(utf8_decode($txt));
    }


?>
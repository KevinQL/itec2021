<?php
    // Sugerir colocar el session_start en este archivo. Después se va tener que quitar de las otros metodos para que no haya redundancia.

    // Configura la fecha de america lima 
    date_default_timezone_set("America/Lima");
    setlocale(LC_ALL,"es_ES");

    $conAjax = true;

    require_once("../controllers/adminController.php");

    if(!is_null($_POST['data'])){
        //convirtiendo los datos enviados desde la vista, ha un objeto stdClass
        $data = json_decode($_POST['data']);
        //Instancia del objeto controller
        $obj = new adminController();

        //Regitro usuario para la administración del sistema 
        if ($data->id === "exe-certificado") {
            # code...
            $res = $obj->consultaData_Controller($data);
            echo json_encode($res);
        }
        elseif ($data->id === "exe-info") {
            # code...
            // $res = $obj->traerInfoDocente_Controller($data);
            echo json_encode($data);
        }

        else {
            echo json_encode("ERROR!!");
        }

    }else{
        echo json_encode("ERROR!!");
    }
    

?>
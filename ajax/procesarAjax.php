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

        // Respuesta por defecto!!
        $res = ["eval" => false, "data"=>[], "msj"=>"Sin efecto"];

        //Regitro usuario para la administración del sistema 
        if ($data->id === "exe-certificado") {
            # code...

            if(!empty($data->h_captcha)){

                $data_hc = [
                    "secret" => "0x28899D6c004BBBB2489d955c4F2514cc94940a73",
                    "response" => $data->h_captcha
                ];

                $verify = curl_init();
                curl_setopt($verify, CURLOPT_URL, "https://hcaptcha.com/siteverify");
                curl_setopt($verify, CURLOPT_POST, true);
                curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($data_hc));
                curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);

                $response = curl_exec($verify);
                $responseData = json_decode($response);
                $res["response_hcaptcha"] = $responseData;
            
                if($responseData->success){
                    $resServer = $obj->consultaData_Controller($data);
                    $res["eval"] = $resServer["eval"];
                    $res["data"] = $resServer["data"];
                    $res["msj"] = $resServer["msj"];

                    unset($resServer);
                }else{
                    $res["msj"] = "Tiene que volver ha realizar el captcha";
                }
                
            }else{
                $res["msj"] = "No se resolvio el captcha";
            }
            
            unset($data);
            unset($obj);
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
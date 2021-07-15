<?php


    // Probando la conexion a la base de datos
    error_reporting(0);

    require_once("./controllers/adminController.php");

    $obj = new adminController();
    
    $data = new stdClass;

    $data->txt_documentv = "02369404";

    $res = $obj->consultaData_Controller($data);

    var_dump($res);






















    // require_once ("./core/configApp.php");
    
    
    // $link= new PDO(SGBD,USER,PASS);//array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
    // $link->exec("set names utf8");
    // // return $link;

    // var_dump($link);
    // if($link){
    //     echo "se conecto";
    // }else{
    //     echo "no se conecto";
    // }


    // $res= $link->prepare("SELECT * FROM certificados_temp");
    // $res->execute();
    // // return $response;
    // var_dump($res);

    // $data_res = [];
    // if($res->rowCount() >= 1){
    //     $eval = true;
    //     $msj_sys = "Se obtubo registros!!";
    //     while ($regis_fla = $res->fetch(PDO::FETCH_ASSOC)) {
    //         # code...
    //         $data_res[] = $regis_fla;
    //     }
    // }
    // var_dump( ["eval" => $eval, "data" => $data_res, "msj" => $msj_sys] );
 


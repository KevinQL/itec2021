<?php

    // Sugerir colocar el session_start en este archivo. Después se va tener que quitar de las otros metodos para que no haya redundancia.
    // Sorry, my english is bad, but I'm trying to learning  
    session_start();

    // config date for America
    date_default_timezone_set("America/Lima");
    setlocale(LC_ALL,"es_ES");

    // Access to clases and methods for this location
    $conAjax = true;
    // Response default
    $res = ["eval" => false, "data"=>[], "msj"=>"Sin efecto"];
    // Converting the data to object stdClass
    $data = json_decode($_POST['data']);


    /**
     * Every class files created in this project
     */
    require_once("../controllers/adminController.php");

<?php 
    // RUTAS
    require_once("./core/configRoutes.php");

    // PAGINAS PERMITIDAS DE ITEC
    $array_pg = ["inicio", "cursos"];

    if(!empty($_GET["pg"])){
        $pg = !isset($_GET["pg"]) || empty($_GET["pg"])? "inicio" : trim($_GET["pg"]);
        if(!in_array($pg, $array_pg)){
            $pg="inicio";
        }

    }else{
        $pg = "inicio";
    }


    include_once("./views/view_{$pg}.php");


?>
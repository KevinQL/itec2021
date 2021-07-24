<?php 
    //Iniciando la variable global SESSION
    session_start();
    
    // Desactivar toda las notificaciónes del PHP
    error_reporting(0);
    
    // Configura la fecha de america lima 
    date_default_timezone_set("America/Lima");
    setlocale(LC_ALL,"es_ES");
    
    // clases con los metodos necesarios 
    require_once("./core/configRoutes.php"); // RUTAS 
    require_once("./controllers/adminController.php");
    // require_once("controllers/{ejemplo}Controller.php");
    // require_once("controllers/webItecController.php");
    // require_once("controllers/virtualController.php");
    
    $obj_admin = new adminController();
    
    /**
     * capturando el estado de lavariable SESSION
     */
    $session = $obj_admin->verificarSessionController();
    
    /**
     * metodo de la clase adminController
     * administra las paginas que se mostrarán para los usuarios en funcion de la url
     */
    $paginaResult = $obj_admin->administrarPaginasController($session);
    
    // var_dump($_SESSION);
    include_once("./views/" . $paginaResult);     

?>
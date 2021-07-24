<?php

    $conAjax = is_null($conAjax)?false:$conAjax;
    if($conAjax){
        require_once "../models/adminModel.php";
    }else{
        require_once "./models/adminModel.php";
    }


    class adminController extends adminModel {

        public function loginUsuario_Controller($data){
            $dataModel = new stdClass;
            $dataModel->email = $data->emailv;
            $dataModel->password = $data->passwordv;

            $res = self::loginUsuario_Model($dataModel);


            return $res;
        }


        public function registrarUsuario_Controller($data){
            $dataModel = new stdClass;
            $dataModel->email = $data->emailv;
            $dataModel->password = $data->passwordv;

            $res_email = self::compruebaEmail_Model($dataModel->email);
            if(!$res_email["eval"]){
                $res = self::registrarUsuario_Model($dataModel);
            }else{
                $res = $res_email;
                $res["eval"] = false; //modificando el valor para ser tratado en el front end
            }
            unset($dataModel);
            unset($res_email);
            return $res;
        }

        public function consultaData_Controller($data){
            $dataModel = new StdClass;
            $dataModel->dni = $data->txt_documentv;

            $res = self::consultaData_Model($dataModel);

            return $res;
        }


        /**
         * VERIFICADO
         * (IMPORTANTE)
         */
        public function verificarSessionController(){
            $session = (isset($_SESSION['start']) && !empty($_SESSION['start']) &&!is_null($_SESSION)) ? true:false;
            return $session;
        }


        /**
         * VERIFICADO
         * (IMPORTANTE)
         */
        public function administrarPaginasController($session){
            
            $pagina = isset($_GET['pg']) && !empty($_GET['pg']) ? $_GET['pg'] : "defecto";
            $pagina = strtolower(trim($pagina));

            $arrayPaginas = [ "login", "registrate", "web", "sobrenosotros", "convenios", "certification", "certificado_digital", "certificado/test-qr"];

            //Cuando la sessión sea VERDADERA
            if($session){

                //por si es 'login'. cambiamos a 'inicio'
                $pagina = ($pagina != "login")? $pagina : "inicio"; //Agregado ultimo

                //Validando niveles de seguridad. [1]:NIVEL ADMINISTRADOR
                if($_SESSION['data']['tipo_usuario']==1){
                    $arr_modules = [ "closed","inicio", "certificado", "plantilla" ];
                    $arrayPaginas = array_merge($arrayPaginas, $arr_modules);
                }else{
                    //Nivel invitado pro defecto
                    $arr_modules = [ "closed","inicio", "certificado", "plantilla"  ];
                    $arrayPaginas = array_merge($arrayPaginas, $arr_modules);
                }              
                
                /**
                 * Solo en caso de que esté logueado; verifica pagina seleccionada, y luego lo redirige.
                 * Si no coincide con ninguna página, te ridirecciona a la página de Inicio.php
                 */
                if(in_array($pagina, $arrayPaginas, true)){
                    $pagina = "view_". $pagina .".php";
                }else {
                    $pagina = "view_inicio.php";
                }

            }else{
                //CUANDO LA SESSIÓN NO EXISTA
                //Presentación de la página principal  
                if(in_array($pagina, $arrayPaginas, true)){
                    $pagina = "view_". $pagina .".php";
                }else {
                    $pagina = "view_web.php";
                }                
            
            }  

            return $pagina;
        }
        

    }


?>
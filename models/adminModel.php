<?php 

    $conAjax = is_null($conAjax)?false:$conAjax;
    if($conAjax){
        require_once "../models/mainModel.php";
    }else{
        require_once "./models/mainModel.php";
    }


    class adminModel{


        protected function consultaData_Model($data){
            $eval = false;
            $msj_sys = "No se obtubo registros";
            $query =  "SELECT * FROM certificados_temp WHERE dni='{$data->dni}'";
            $res = mainModel::ejecutar_una_consulta($query);
            $data_res = [];
            if($res->rowCount() >= 1){
                $eval = true;
                $msj_sys = "Se obtubo registros!!";
                while ($regis_fla = $res->fetch(PDO::FETCH_ASSOC)) {
                    # code...
                    $data_res[] = $regis_fla;
                }
            }
            return ["eval" => $eval, "data" => $data_res, "msj" => $msj_sys];
        }


        
        
        //-------------------------------------------------------------------------------
        /**
         * (IMPORTANTE)
         * si es verad encripta y sino desencripta
         * @param boolean $encriptar
         * Contraseña a encriptar o desencriptar
         * @param string $password
         * @return string boolean
         * 
         * Función que encripta y desencripta
         */        
        protected function encriptar_desencriptar($password,$password_db){
            if(trim($password_db) === ''){
                return password_hash($password, PASSWORD_DEFAULT);//Encripta (SOLO se necesita el PRIMER parametro.EJEM: ->fn('pass','')<-)
            }else{
                return password_verify($password,$password_db);//desencripta (SOLO cuando los DOS parametros tengan valor)
            }
        }


    }


?>
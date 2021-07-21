// see that file is correct for execute the scripts
let view_registrate = document.querySelector("#view_registrate");

if(view_registrate){
    //message for the load this file  
    console.log("load js_registrate.js");
    


    function dataHTML_registrate() {
        let email = document.querySelector(".email");    
        let password = document.querySelector(".password");    
        let password_r = document.querySelector(".password-repeat");  
        
        return {
            elements: {
                email,
                password,
                password_r
            },
            values : {
                emailv : email.value.trim(),
                passwordv : password.value.trim(),
                password_rv : password_r.value.trim()
            }
        }
    }

    function check_registrate(){
        let data = dataHTML_registrate();
        let {emailv,
            passwordv,
            password_rv
        } = data.values

        if(emailv.length != 0 && passwordv.length != 0 && password_rv.length != 0 ){
            if(passwordv === password_rv){
                eval = true;
                msj = "correcto";
            }else{
                eval = false;
                msj = "el password no es el mismo";
            }

        }else{
            eval = false;
            msj = "tiene que rellenar el formulario";
        }

        return {eval,
            msj
        }
    }

    function execute_registrate() {
        let data = dataHTML_registrate();
        let {emailv,
            passwordv,
            password_rv
        } = data.values
        
        let {email,
            password,
            password_r
        } = data.elements

        if(check_registrate().eval){
            alert(check_registrate().msj);

            fetchKev('POST',{
                    id:'registrate',
                    emailv,
                    passwordv,
                    password_rv
                },
                res => {
                    // resultado de la consulta
                    console.log(res);
                    if(res.eval){
                        sweetModal(res.msj,'center','success',1200);
                        cleanInputs([email,
                            password,
                            password_r]);

                    }else{
                        sweetModal(res.msj,'center','warning',1200);
                    }

                },
                URL_AJAX_PROCESAR
            );

        }else{
            sweetModal(check_registrate().msj,'center','error',1200);
        }


    }


//end scripts
}
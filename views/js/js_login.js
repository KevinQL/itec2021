// see that file is correct for execute the scripts
let view_login = document.querySelector("#view_login");

if(view_login){
    //message for the load this file  
    console.log("load js_login.js");
    


    function dataHTML_login() {
        let email = document.querySelector(".email");    
        let password = document.querySelector(".password");
        
        return {
            elements: {
                email,
                password
            },
            values : {
                emailv : email.value.trim(),
                passwordv : password.value.trim()
            }
        }
    }

    function check_login(){
        let data = dataHTML_login();
        let {emailv,
            passwordv
        } = data.values

        if( emailv.length != 0 && passwordv.length != 0 ){
            eval = true;
            msj = "correcto";
        }else{
            eval = false;
            msj = "tiene que rellenar el formulario";
        }

        return {eval,
            msj
        }
    }

    function execute_login() {
        let data = dataHTML_login();
        let {emailv,
            passwordv
        } = data.values
        
        let {email,
            password
        } = data.elements

        if(check_login().eval){
            // sweetModal(check_login().msj,'center','info',1200);
            fetchKev('POST',{
                    id:'login',
                    emailv,
                    passwordv
                },
                res => {
                    // resultado de la consulta
                    console.log(res);
                    if(res.eval){
                        sweetModal(res.msj,'center','success',1200);
                        cleanInputs([email,
                            password 
                        ]);

                        setTimeout(() => {
                            location.reload();
                        }, 500);

                    }else{
                        sweetModal(res.msj,'center','warning',1200);
                    }

                },
                URL_AJAX_PROCESAR
            );

        }else{
            sweetModal(check_login().msj,'center','error',1200);
        }


    }


//end scripts
}
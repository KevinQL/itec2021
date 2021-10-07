

function data_certificadoDigital(){
    let txt_document = document.querySelector("#txt_document");
    let resultado = document.querySelector("#resultado");

    return {
        elements : {
            txt_document,
            resultado
        },
        values : {
            txt_documentv : txt_document.value.trim()
        }
    }

}


function btn_buscarCertificados(){
    // console.log( data_certificadoDigital() )

    let data = data_certificadoDigital();
    let {txt_documentv} = data.values;
    let {resultado} = data.elements;

    resultado.innerHTML = `
        <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
        <span class="sr-only">Loading...</span> 
    `;

    // response captcha
    let g_captcha = document.querySelector("textarea[name=g-recaptcha-response]").value;
    let h_captcha = document.querySelector("textarea[name=h-captcha-response]").value;

    // console.log(h_captcha, g_captcha);
    if(txt_documentv.length <= 4){
        sweetModal("Num. de DNI invalido!", "center","error",1200);
        resultado.innerHTML = ``;
        return;
    }
    if(h_captcha.length == 0){
        sweetModal("Resolver Captha!", "center","warning",1200);
        resultado.innerHTML = ``;
        return;
    }

    fetchKev("POST",{
            id : "exe-certificado",
            txt_documentv,
            g_captcha,
            h_captcha
        }, res => {
            // console.log(res)
            // return;
            // Resultado html 
            resultado.innerHTML = ``;
            let res_html = ``;

            if(res.eval){
                //Obtengo los datos
                let $data_user = res.data
                
                if($data_user.length != 0){
                    sweetModal(res.msj, "center","success",1200);

                    $data_user.forEach(element => {
                        res_html += ` 
                        <tr>
                            <th scope="row">${element.registro}</th>
                            <td>${element.nombre_apellido}</td>
                            <td>${element.curso}</td>
                            <td>${element.fecha_emision}</td>
                            <!--
                            <td>
                                <a  target="_blank" 
                                    href="?pg=modules/certificado/certificado&idcert_temp=${element.idcertificados_temp}"
                                >
                                    Obtener certificado
                                </a>
                            </td>
                            -->
                        </tr>
                        `;
                    });

                }else{
                    sweetModal(res.msj, "center","info",1200);
                }
                
            }else{
                //No se resolvio el capthca
                sweetModal(res.msj, "center","warning",1200);

                if(!res.response_hcaptcha.success){
                    setTimeout(() => {
                        location.reload();
                    }, 1100);
                }
            }

            resultado.innerHTML = res_html; 

        },
        URL_AJAX_PROCESAR
    );
}

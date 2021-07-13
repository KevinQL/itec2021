

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
    console.log( data_certificadoDigital() )

    let data = data_certificadoDigital();
    let {txt_documentv} = data.values;
    let {resultado} = data.elements;

    // response captcha
    let g_captcha = document.querySelector("textarea[name=g-recaptcha-response]").value;
    let h_captcha = document.querySelector("textarea[name=h-captcha-response]").value;

    console.log(h_captcha, g_captcha);


    fetchKev("POST",{
            id : "exe-certificado",
            txt_documentv,
            g_captcha,
            h_captcha
        }, res => {
            // console.log(res)
            // return;
            let $data_user = res.data

            let res_html = ``;
            let num = 1;
            
            $data_user.forEach(element => {
                res_html += ` 
                <tr>
                    <th scope="row">${num++}</th>
                    <td>${element.registro}</td>
                    <td>${element.nombre_apellido}</td>
                    <td>${element.curso}</td>
                </tr>
                `;
            });

            resultado.innerHTML = res_html; 

        },
        URL_AJAX_PROCESAR
    );
}

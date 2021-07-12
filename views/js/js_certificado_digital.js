

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

    fetchKev("POST",{
            id : "exe-certificado",
            txt_documentv
        }, res => {
            console.log(res)

            let $data_user = res.data

            let res_html = ``;
            let num = 1;
            
            $data_user.forEach(element => {
                res_html += ` 
                <tr>
                    <th scope="row">${num++}</th>
                    <td>${element.nombre_apellido}</td>
                    <td>${element.dni}</td>
                    <td>@mdo</td>
                </tr>
                `;
            });

            resultado.innerHTML = res_html; 

        },
        URL_AJAX_PROCESAR
    );
}

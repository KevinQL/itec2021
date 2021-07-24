console.log("load js_admin.js");

function cerrar(){
    fetchKev('POST',{
        id:'closed'
    },
    res => {
        // resultado de la consulta
        console.log(res);
        if(res.eval){
            sweetModal(res.msj,'center','success',1200);
            setTimeout(() => {
                location.reload();
            }, 1200);

        }else{
            sweetModal(res.msj,'center','warning',1200);
        }

    },
    URL_AJAX_PROCESAR
);
}
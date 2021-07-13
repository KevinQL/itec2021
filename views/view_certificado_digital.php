<!doctype html>
<html lang="en">
    <head>
        
        <?php
            include_once("./views/secctions/header_links.html");
        ?>

        <script src="https://hcaptcha.com/1/api.js" async defer></script>

        <title>Validar Certificado</title>

        <style>
            /* .fondo{
                background-image: url("./views/assets/images/educacion.jpg");
                background-position: center;
                height: 100px;
            } */
        </style>

    </head>
    <body>

        <!-- SECCIÓN DE INDICADOR DE PAGINA DE CARGA (PRE LOADER) -->
        <?php
            include_once("./views/components/presentacion-precarga.html");
        ?>
        
        <!-- NAVEGACIÓN DE LAPAGINA DE ITEC -->
        <?php
            include_once( URL_SECCTIONS . "navegacion_principal.html");
        ?>

        <!-- SECCION CERTIFICADO -->

        <section class="k-seccionCertificado">  
            <div class="container">
                <div class="k-header_certi">
                    <h1 class="titulo-certi"><span class="titulo-itec">INGRESA</span> TU <br> NUM. DOCUMENTO</h1>
                    <input type="text" class="txt_document  k-input-b" id="txt_document" placeholder="INGRESA TU NUMERO DE DOCUMENTO">

                    <div class="pt-2 text-center">
                        <div class="h-captcha" data-sitekey="416bccfc-fad7-4d20-943f-d777f922a11d">
                        </div>
                    </div>

                    <button class="btn-buscar-certi" onclick="btn_buscarCertificados();"> 
                        BUSCAR 
                    </button>
                </div>

                <div>

                    <table class="table">
                        <thead class="text-center">
                            <tr>
                                <th scope="col">Enum.</th>
                                <th scope="col">Registro</th>
                                <th scope="col">Nombre y Apellidos</th>
                                <th scope="col">Curso</th>
                            </tr>
                        </thead>
                        <tbody class="resultado text-center" id="resultado">
                            <tr>
                                <th scope="row">1</th>
                                <td>Nombre y Apellido</td>
                                <td>Curso</td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                        </tbody>
                    </table>
            
                </div>
            </div>
        </section>


        <!-- SOCIAL MENSAJERIA -->
        <?php
            include_once("./views/components/social.html");
        ?>


        <!-- FOOTER DE LA PÁGINA DE ITEC -->
        <?php
            include_once("./views/secctions/footer.html");
        ?>

        <!-- Footer con los links de la página -->
        <?php
            include_once("./views/secctions/footer_links.html");
        ?>
    </body>
</html>



<!-- 
<a href='https://www.freepik.es/fotos/tecnologia'>Foto de Tecnología creado por freepik - www.freepik.es</a>

 -->
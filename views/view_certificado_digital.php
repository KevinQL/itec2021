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
                    <input type="number" class="txt_document  k-input-b" id="txt_document" placeholder="INGRESA AQUÍ TU NUM. DOCUMENTO">

                    <!-- Elemento hCaptcha -->
                    <div class="pt-2 text-center">
                        <div class="h-captcha" data-sitekey="416bccfc-fad7-4d20-943f-d777f922a11d">
                        </div>
                    </div>

                    <button class="btn-buscar-certi" onclick="btn_buscarCertificados();"> 
                        BUSCAR 
                    </button>
                </div>

                <div class="tabled_div">

                    <table class="table">
                        <thead class="text-center titulo-itec">
                            <tr>
                                <th scope="col">REGISTRO</th>
                                <th scope="col">NOMBRE Y APELLIDOS</th>
                                <th scope="col">CURSO</th>
                                <th scope="col">FECHA DE EMISIÓN</th>
                            </tr>
                        </thead>
                        <tbody class="resultado text-center" id="resultado">
                            <!-- <tr>
                                <th scope="row">Loremasasas ipsum dolor sit amet.</th>
                                <td>kevin123456dasasas quispe lima</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, eaque!</td>
                                <td>kevin quispe lima</td>
                            </tr>
                            <tr>
                                <th scope="row">Loremasasas ipsum dolor sit amet.</th>
                                <td>kevin123456dasasas quispe lima</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, eaque!</td>
                                <td>kevin quispe lima</td>
                            </tr> -->
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
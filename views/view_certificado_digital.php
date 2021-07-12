<!doctype html>
<html lang="en">
    <head>
        
        <?php
            include_once("./views/secctions/header_links.html");
        ?>

        <title>Validar Certificado</title>
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

        <!-- SECCIÓN PRESENTACIÓN -->
        <section class="k-presentacion ">

            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="k-grid k-content-left ">
                            <div>
                                <div class="k-social my-2">
                                    <span>
                                        <a href="#">
                                            <img src="./views/assets/icons/social/facebook.png" width="30px" alt="">
                                        </a>
                                    </span>
                                    <span>
                                        <a href="#">
                                            <img src="./views/assets/icons/social/instagram.png" width="30px" alt="">
                                        </a>
                                    </span>
                                    <span>
                                        <a href="#">
                                            <img src="./views/assets/icons/social/youtube.png" width="30px" alt="">
                                        </a>
                                    </span>
                                    <span>
                                        <a href="#">
                                            <img src="./views/assets/icons/social/gorjeo.png" width="30px" alt="">
                                        </a>
                                    </span>
                                </div>

                                <h1 class="k-title-presentacion">INGRESA TU <br> NUM. DOCUMENTO</h1>

                                <input type="text" class="txt_document" id="txt_document" placeholder="INGRESA TU NUMERO DE DOCUMENTO"> <br>

                                <button class="btn btn-primary btn-lg k-btn-unete" onclick="btn_buscarCertificados();" >
                                    BUSCAR
                                </button>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="k-grid k-content-right k-prueba">
                        
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                </thead>
                                <tbody class="resultado" id="resultado">
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td colspan="2">Larry the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
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

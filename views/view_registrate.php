<!doctype html>
<html lang="en">
    <head>
        
        <?php
            include_once("./views/secctions/header_links.html");
        ?>

        <title>CERTIFICADO DIGITAL</title>
    </head>
    <body>
        
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
                            <form action="#">
                                <label for="">Nombre: </label> <input type="text" > <br>
                                <label for="">Correo: </label> <input type="text" > <br>
                                <label for="">telf: </label> <input type="text" > <br>
                                <label for="">Detalles: </label> <input type="text" > <br>
                                <input type="submit" value="REGISTARSE">
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="k-grid k-content-left ">
                            <div>
                                <h1 class="k-title-presentacion">REGÍSTRATE Y<br> PREPÁRATE CON <br> NOSOTROS!!</h1>
                                <div class="k-social my-2">
                                    <span>
                                        <a href="#">
                                            <img src="./views/assets/facebook.png" width="30px" alt="">
                                        </a>
                                    </span>
                                    <span>
                                        <a href="#">
                                            <img src="./views/assets/instagram.png" width="30px" alt="">
                                        </a>
                                    </span>
                                    <span>
                                        <a href="#">
                                            <img src="./views/assets/youtube.png" width="30px" alt="">
                                        </a>
                                    </span>
                                    <span>
                                        <a href="#">
                                            <img src="./views/assets/gorjeo.png" width="30px" alt="">
                                        </a>
                                    </span>
                                </div>
                                <p class="lead k-parrafo-presentacion">
                                    Adquiere habilidades con los cursos, certificados y diplomados en línea que ofrece la institución el Tecnológico en convenio con instituciones acreditadas por la SUNEDU.
                                </p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>


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
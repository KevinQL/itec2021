<!doctype html>
<html lang="en">
    <head>
        
        <?php
            include_once("./views/secctions/header_links.html");
        ?>

        <title>INICIO ITEC</title>
    </head>
    <body>
        
        <!-- NAVEGACIÓN DE LAPAGINA DE ITEC -->
        <?php
            include_once( URL_SECCTIONS . "navegacion_principal.html");
        ?>

        <!-- CINTA DE PRESENTACIÓN DE LA PÁGINA DE ITEC -->
        <section class="k-cinta py-5">

            <div class="container">
                
                <h2 class="text-center titulo-itec">CONVENIOS</h2>

                <p class="text-center lead convenio_parrafo ">
                    «Juntarse es un comienzo, seguir juntos es un progreso y trabajar juntos por una educación efectiva es un éxito»
                </p>

                <div class="row pt-3 pb-4">
                    <div class="col-md-6 text-center convenio_card">
                        <img src="./views/assets/itec/universidad.jpg" alt="" width="100%" height="200px">
                        <span>Universidad Nacional José María Arguedas</span>
                        <h5>«LICENCIADA POR <span class="titulo-itec">LA SUNEDO</span> »</h5>
                    </div>
                    <div class="col-md-6 text-center convenio_card">
                        <img src="./views/assets/itec/ugel.jpg" alt="" width="100%" height="200px">
                        <span>Unidad de Gestión Educativa Local Andahuaylas</span>
                        <h5>«MINISTERIO <span class="titulo-itec">DE EDUCACIÓN</span> »</h5>
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

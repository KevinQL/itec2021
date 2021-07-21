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

            <div class="container ">
                <h1>APRENDE CON <br> LOS MEJORES <br> CURSOS!!</h1>
                Contamos con los mejores docentes. . .

                <div class="row py-4">
                    <div class="col-md-4 mt-2">
                        <img src="./views/assets/tutor.png" width="60px" alt="">
                        <h3>De la mano del profesor</h3>
                        <p>Aprende técnicas y métodos de gran valor explicados por los grandes expertos del sector creativo.</p>
                    </div>
                    <div class="col-md-4 mt-2">
                        <img src="./views/assets/experto.png" width="60px" alt="">
                        <h3>Profesores expertos</h3>
                        <p>Cada profesor imparte solo lo que mejor sabe hacer, asegurando transmitir la pasión y la excelencia en cada lección.</p>
                    </div>
                    <div class="col-md-4 mt-2">
                        <img src="./views/assets/www.png" width="60px" alt="">
                        <h3>Comparte conocimiento</h3>
                        <p>Expón tus dudas, pide feedbac, aporta soluciones. Comparte el aprendizaje con el resto de los alumnos de la comunidad.</p>
                    </div>
                </div>
            </div>

        </section>



        <!-- SECCION CUERPO 2 -->
        <section class="k-slider py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <!-- <h3>IMAGEN!!!</h3> -->
                        <video src="promocion.mp4" width="100%" style="border-radius:5px" autoplay muted loop preload poster="">
                            <!-- <source src="promocion.mp4" type="video/mp4"> -->
                            <!-- <img src="videoimg.png" alt="Video no soportado"> -->
                        </video>
                    </div>
                    <div class="col-md-5">
                        <h4 class="h2 k-title-presentacion">ENCUENTRA OPCIONES <br> FLEXIBLES Y <br> ASEQUIBLES</h4>
                        <p class="mt-4 lead k-parrafo-presentacion">Elige entre muchas opciones, incluidas cursos gratuitos y diplomados a un precio innovador. Aprende a tu propio ritmo, 100% en linea</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- seccion de slider EJMPLO -->
        <section class="k-slider">

            <div class="container k-text">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptate quos officiis consequatur obcaecati unde, assumenda deserunt iusto voluptates delectus ipsa.
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

<!doctype html>
<html lang="en">
    <head>
        
        <?php
            include_once("./views/secctions/header_links.html");
        ?>

        <title>INICIO ITEC</title>
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
                                <h1 class="k-title-presentacion">TU FORMACIÓN <br> HACIA EL <br> ÉXITO</h1>
                                <p class="lead k-parrafo-presentacion">
                                    Adquiere habilidades con los cursos, certificados y diplomados en línea que ofrece la institución el Tecnológico en convenio con instituciones acreditadas por la SUNEDU.
                                </p>

                                <button class="btn btn-primary btn-lg k-btn-unete" data-bs-toggle="modal" data-bs-target="#exampleModal" >
                                    ÚNETE, ES GRATIS!
                                </button>

                                <?php
                                    // Modal Formulario información usuario
                                    include_once("./views/components/modal-form.html")
                                ?>

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
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="k-grid k-content-right k-prueba">
                            <!-- <h1>imagen!!!</h1> -->
                            <img src="./views/assets/itec/presentacion.png" alt="" width="100%">
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <!-- CINTA DE PRESENTACIÓN DE LA PÁGINA DE ITEC -->
        <section class="k-cinta py-5">

            <div class="container">
                <h1 class="pt-5"> <span class="titulo-itec">ÚNETE</span> <br> Y APRENDE CON <br> LOS MEJORES!!</h1>
                Contamos con los mejores docentes. . .

                <div class="row py-4">
                    <div class="col-md-4 mt-2">
                        <img src="./views/assets/icons/tutor.png" width="60px" alt="">
                        <h3>De la mano del profesor</h3>
                        <p>Aprende técnicas y métodos de gran valor explicados por los grandes expertos del sector creativo.</p>
                    </div>
                    <div class="col-md-4 mt-2">
                        <img src="./views/assets/icons/experto.png" width="60px" alt="">
                        <h3>Profesores expertos</h3>
                        <p>Cada profesor imparte solo lo que mejor sabe hacer, asegurando transmitir la pasión y la excelencia en cada lección.</p>
                    </div>
                    <div class="col-md-4 mt-2">
                        <img src="./views/assets/icons/www.png" width="60px" alt="">
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
                        <video src="./views/assets/itec/video/promocion.mp4" width="100%" style="border-radius:5px" autoplay muted loop preload poster="">
                            <!-- <source src="promocion.mp4" type="video/mp4"> -->
                            <!-- <img src="videoimg.png" alt="Video no soportado"> -->
                        </video>
                    </div>
                    <div class="col-md-5">
                        <h4 class="h2 k-title-presentacion">ENCUENTRA OPCIONES <br> <span class="titulo-itec">FLEXIBLES</span> Y <br> ASEQUIBLES</h4>
                        <p class="mt-4 lead k-parrafo-presentacion">Elige entre muchas opciones, incluidas cursos gratuitos y diplomados a un precio innovador. Aprende a tu propio ritmo, 100% en linea</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- seccion de slider EJMPLO -->
        <section class="k-slider k-slider-coment">

            <!-- <div class="container k-text">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptate quos officiis consequatur obcaecati unde, assumenda deserunt iusto voluptates delectus ipsa.
            </div> -->


            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class=" k-text">
                        <p>
                            Itec me dio una ruta de aprendizaje y los videos del canal de Itec me resultaron motivacionales. Nuestro mundo ha cambiado muchisimo. 
                        </p>
                        <h4 class="pt-2">Autor. Eduardo Escalante.</h4>
                        <p>Perú - abril 2021</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class=" k-text">
                        <p>
                            Gracias por el programa, descubrí lo mucho que me gustaba el diseno, a todo el que quiera estudiar tecnología: no lo hagan por el dinero que puedan recibir.
                        </p>
                        <h4 class="pt-2">Autor. Juan Carlos</h4>
                        <p>Perú - marzo 2019</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class=" k-text">
                        <p>
                            Si solo con lo que estudie en un mes en Itec puede aprender sobre diseno y conseguir empleo, imaginate lo que harías tu en más tiempo.
                        </p>
                        <h4 class="pt-2">Autor. Marco Olvera.</h4>
                        <p>Argentina - septiembre 2020</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>

        </section>



        
        <!-- EL TECNOLOGICO EN CIFRAS -->
        <section class="k-cifras">
            <div class="container py-5">
                <h2 class="text-center pt-3 pb-5 k-cifras_title"><span class="title_itec">"EL TECNOLÓGICO"</span> EN CIFRAS</h2>
                <div class="row text-center">
                    <div class="col-md-4 lead k-cifras_item">
                        <span class="cifra-num" data-cantidad-total="65000" data-numero="+65 000" data-incremento="80">0</span> <!-- +65 000 -->
                        Estudiantes
                    </div>
                    <div class="col-md-4 lead k-cifras_item">
                        <span class="cifra-num" data-cantidad-total="60000" data-numero="+60 000" data-incremento="80">0</span> <!-- +60 000 -->
                        Estudiantes certificados
                    </div>
                    <div class="col-md-4 lead k-cifras_item">
                        <span class="cifra-num" data-cantidad-total="20" data-numero="+20" data-incremento="1000">0</span> <!-- +20 -->
                        Cursos gratuitos cada mes
                    </div>
                    <div class="col-md-12 lead k-cifras_item">
                        <span class="cifra-num" data-cantidad-total="90" data-numero="+90%" data-incremento="1000">0</span> <!-- +90% -->
                        de egresados satisfechos con la educación recibida.
                    </div>
                </div>
            </div>
        </section>



        <!-- CUERPO 1 -->
        <section>
            <div class="container py-5">
                <h2 class="mb-5 text-center k-titulo-pc1">Alcanza tus metas con ITEC <span class="titulo-itec"> el Tecnológico</span></h2>
                <div class="row text-center">
                    <div class="col-md-3">
                        <img src="./views/assets/icons/leer.png" alt="" width="70px">
                        <h4 class="k-titulo-c1 mt-4">Aprende las <br> habilidades más <br> recientes</h4>
                        <p class="lead">Como ofimática, diseño gráfico, gestión publica, ingles, TIC y muchos más. </p>
                    </div>
                    <div class="col-md-3">
                        <img src="./views/assets/icons/cientifico-de-datos.png" alt="" width="70px">
                        <h4 class="k-titulo-c1 mt-4">Prepárate <br> para una carrera <br> profesional</h4>
                        <p class="lead">En campos de mucha demanda, como TI, Administración publica e Ingles.</p>
                    </div>
                    <div class="col-md-3">
                        <img src="./views/assets/icons/ganador.png" alt="" width="70px">
                        <h4 class="k-titulo-c1 mt-4">Obtén un <br> diplomado</h4>
                        <p class="lead">De una de las mejores instituciones en convenio con instituciones y universidades acreditas.</p>
                    </div>
                    <div class="col-md-3">
                        <img src="./views/assets/icons/clasificacion.png" alt="" width="70px">
                        <h4 class="k-titulo-c1 mt-4">Mejora tu <br> organización</h4>
                        <p class="lead">Con programas de desarrollo y capacitación con mucha demanda.</p>
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

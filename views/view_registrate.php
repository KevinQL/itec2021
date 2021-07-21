<!doctype html>
<html lang="en">
    <head>
        
        <?php
            include_once("./views/secctions/header_links.html");
        ?>

        <title>REGISTRATE ITEC</title>
    </head>
    <body id="view_registrate">

        <!-- SECCIÓN DE INDICADOR DE PAGINA DE CARGA (PRE LOADER) -->
        <?php
            include_once("./views/components/presentacion-precarga.html");
        ?>
        
        <!-- NAVEGACIÓN DE LAPAGINA DE ITEC -->
        <?php
            include_once( URL_SECCTIONS . "navegacion_principal.html");
        ?>

        <!-- SECCIÓN registrate -->
        <section class="k-session">
            <div class="container k-centrar">
                <div class="k-card">
                    <h2>ITEC Registro</h2>
                    <input type="email" name="email"  class="email" placeholder="Ingresa su correo">
                    <input type="password" name="password"  class="password" placeholder="Ingrese su contrasena">
                    <input type="password" name="password-repeat"  class="password-repeat" placeholder="Ingrese nuevamente su contrasena">

                    <div class="content-btn text-center pt-2 pb-3">
                        <button onclick="execute_registrate();">
                            REGISTRARME
                        </button>
                        <br>
                        <a href="?pg=login">Iniciar Session</a>
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

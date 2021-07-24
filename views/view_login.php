<!doctype html>
<html lang="en">
    <head>
        
        <?php
            include_once("./views/secctions/header_links.html");
        ?>

        <title>LOGIN ITEC</title>
    </head>
    <body id="view_login">

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
                    <h2>ITEC Login</h2>
                    <input type="email" name="email"  class="email" placeholder="Ingresa su correo">
                    <input type="password" name="password"  class="password" placeholder="Ingrese su contrasena">

                    <div class="content-btn text-center pt-2 pb-3">
                        <button onclick="execute_login();">
                            INGRESAR
                        </button>
                        <br>
                        <a href="?pg=registrate">Registrarse</a>
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

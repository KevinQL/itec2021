<?php

// Ya se está iniciando el session start en un archivo ajax y en en el index
// session_start();

session_destroy();  

echo "the ADMIN ITEC is closed";

echo "</br>";

echo "<a href='?pg=login'>ACEPTAR!!</a>";
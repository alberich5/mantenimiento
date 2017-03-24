<?php
#Inicio del archivo autoload (22/10/2016)

include 'core/controller/print_error.php';
include 'core/controller/database.php';
include 'core/controller/site_controller.php';

include 'core/modules/header-module.php';

include 'core/functions/views.php';
include 'core/functions/actions.php';

include 'core/modules/footer-module.php';


/* EXPLIACIÓNES
#Incluimos el archivo para no mostrar errores por pantalla excepto los de lego-web
include 'core/controller/print_error.php';

#Incluimos el archivo de la base de datos
include 'core/controller/database.php';

#Incluimos el archivo de configuración del sitio
include 'core/controller/site_controller.php';

#Incluimos los modulos de la cabecera
include 'core/modules/header-module.php';

#Incluimos los archivos de las vistas
include 'core/functions/views.php';

#Incluimos los archivos de las acciones
include 'core/functions/actions.php';

#Incluimos los modulos de los pies de pagina
include 'core/modules/footer-module.php';
*/
?>
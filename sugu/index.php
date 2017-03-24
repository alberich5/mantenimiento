<?php
/*/
Powered by dacoto.es
Created by @dacototv
Versión de Lego Web: 1.0
Fecha de Inicio: 22/10/2016
/*/

#Iniciamos todas las sesiones
session_start();

#Mostrar errores por pantalla? 0=NO y 1=SI
$print_error='0';

# Incluimos el archivo autoload de la carpeta core si no existe la carpeta de instalación
if(file_exists('./installer')){
	header('Location: ./installer');
}else{
	include('core/autoload.php');
}

?>
<?php
#Archivo que gestiona las action (22/10/2016)

#Creamos la funcion action para incluir el archivo de la vista de la accion
function action($action)
{
	#Obtenemos la vista de la funcion en la variable $action
	#Definimos la variable del fichero que tenemos que incluir
	$include_action='core/app/action/'.$action.'-action.php';
	#Comprobamos que el archvo que vamos a incluir existe, si no es asi mostramos el error por pantalla
	if (file_exists($include_action)) {
		#Como si que existe, incluimos el archivo de la vista
		include $include_action ;
	}else{
		#Como no existe, mostramos el error por pantalla
		echo '<br><b>404 NOT FOUND</b> Action <b>'.$action.'</b> folder! - <a target="_blank" href="https://www.dacoto.es/forums/forum/lego-web">Help</a>';
	}

}

#El condicionale para incluir las acciones
if (isset($_GET['action'])) {
	#Realizamos la funcion action con el archivo de la varable $_GET['action']
	action($_GET['action']);

}

?>
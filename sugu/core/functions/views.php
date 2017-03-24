<?php
#Archivo que gestiona las vistas (22/10/2016)

#Creamos la funcion view para incluir el archivo de la vista
function view($view)
{
	#Obtenemos la vista dela funcion en la variable $view
	#Definimos la variable del fichero que tenemos que incluir
	$include_view='core/app/view/'.$view.'-view.php';
	#Comprobamos que el archvo que vamos a incluir existe, si no es asi mostramos el error por pantalla
	if (file_exists($include_view)) {
		#Como si que existe, incluimos el archivo de la vista
		include $include_view ;
	}else{
		#Como no existe, mostramos el error por pantalla
		echo '<br><b>404 NOT FOUND</b> View <b>'.$view.'</b> folder! - <a target="_blank" href="https://www.dacoto.es/forums/forum/lego-web">Help</a>';
	}

}

#Creamos los condicionales para incluir las vistas
if (!isset($_GET['view']) && !isset($_GET['action'])) {
	#1r condicional, si no se ha asignado las variables view o action, definimos la primera página como index
	#Realizamos la funcion view con el archivo index
	view('index');

}elseif (isset($_GET['view']) && !isset($_GET['action'])) {
	#2n condicional, si se ha asignado la variable view y no se ha asignado la variable action, mostramos la vista que hemos pedido
	#Iniciamos la variable
	$view=$_GET['view'];
	#Realizamos la funcion de vista con el archivo que hemos pedido
	view($view);

}elseif (isset($_GET['view']) && isset($_GET['action'])) {
	#Como se han definido dos variables contrarias, enviamos el error por pantalla
	echo '<br><b>403 PERMISION DENIED</b> These sent two variables that can cause error! - <a target="_blank" href="https://www.dacoto.es/forums/forum/lego-web">Help</a>';

}elseif (!isset($_GET['view']) && isset($_GET['action'])) {
	#Como si que hemos obtenido la variable action, no mostramos ningun error y no mostramos nada por pantalla.

}

?>
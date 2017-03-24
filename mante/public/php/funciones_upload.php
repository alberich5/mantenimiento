<?php
//crear la conexion de la base de datos
$conexion=mysql_connect('localhost','root','')or die('no se pudo realizar la conexion');
mysql_select_db('styde',$conexion)or die('no se encuentra la bd');
//creo una fecha cualquiera

//Recibimos el Array y lo decodificamos desde json, para poder utilizarlo como objeto
$array 	= json_decode($_POST['data']);

print_r($array);
 
 
	//una vez que recorremos cada posición entramos a esta donde tenemos cada array con la información necesaria para el update
	foreach ($array as $key => $value) {
		//hacemos un poco de limpieza y sanatización de variables y luego creamos nuestras querys
		$id 	= trim(strtolower($value->id));
		$ocupa 	= filter_var(trim(strtolower($value->ocupado)), FILTER_SANITIZE_STRING);
		$regis 	= trim(strtolower($value->registrados));
		$nombre 	= trim(strtolower($value->nombre));
		$fech 	= trim(strtolower($value->fecha));
 
		$query=  "INSERT INTO `ocupacion`( `id_est`, `Fecha`, `CtosDisp`, `CtosOcup`) VALUES ( "
						."'".$id ."'".","."'".$fech."'".","."'".$regis."'".","."'"
							.$ocupa."')";
		mysql_query($query) or die(mysql_error());


	}


?>

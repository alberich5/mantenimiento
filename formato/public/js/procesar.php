<?php

// print_r($_POST);

$conexion=mysql_connect('localhost','root','')or die('no se pudo realizar la conexion');
mysql_select_db('ejemplito',$conexion)or die('no se encuentra la bd');

$nombre='omar';
$apellido='sieera';
$telefono='9519876';

$query="INSERT INTO formulario (nombre,apellido,telefono) VALUES ('$nombre','$apellido','$telefono')";

$resp=mysql_query($query);

$respuesta="";

if ($resp) {
	$respuesta="se guardo con exito";
}else{
	$respuesta="ocurrio un error al momento de guardar";
}

echo json_encode($respuesta);
 
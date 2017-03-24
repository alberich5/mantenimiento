<?php 

	$nombre=$_POST['nombre'];
	$tel=$_POST['tel'];
	$cliente=$_POST['cliente'];
	$mante=$_POST['mante'];
	$obser=$_POST['observacion'];
	$fecha=$_POST['fecha'];

	echo $tel."-".$cliente."-".$mante."-".$obser."-".$fecha."-".$nombre;
	
 ?>
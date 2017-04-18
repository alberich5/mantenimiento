<?php

require_once("cnx/conexion.php");

$pconsulta=$_REQUEST["pconsulta"];

if($pconsulta == "consulta"){
	echo insertar_datos();
}elseif ($pconsulta == "mostrar_mensajes") {
	echo cargar_datos();
}


function insertar_datos(){

	$mmensaje=$_REQUEST["mmensaje"];
	$nnombre=$_REQUEST["nnombre"];

	$sql="insert into chat (mensaje,nombre) values ('$mmensaje','$nnombre')";
	mysql_query($sql);
	
}

function cargar_datos(){

	$sql="select nombre,mensaje from chat order by id asc";
	$r=mysql_query($sql);
	while($res=mysql_fetch_array($r)){
		$nom=$res["nombre"];
		$men=$res["mensaje"];

		echo "<strong>".$nom."</strong>: ".$men."<br>";

	}


}


?>
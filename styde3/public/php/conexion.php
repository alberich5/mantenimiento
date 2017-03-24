<?php 

	function conectarse(){
		$servidor = "localhost";
		$usuario = "root";
		$password ="";
		$bd ="styde";

		$conectar = new mysqli($servidor,$usuario,$password,$bd);
		return $conectar;
	}
	$conexion = conectarse();
 ?>
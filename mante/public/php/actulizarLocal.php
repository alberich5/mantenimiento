<?php 

$id =$_POST['id'];

$nombre=$_POST['nombre'];
$folio=$_POST['folio'];


include("conexion.php");

$consulta="UPDATE `localidad` SET `nom_local`='$nombre',`Folio`=$folio WHERE cve_local = $id";

$ejecutar  = $conexion->query(utf8_encode($consulta));



////////////////// 


 ?>
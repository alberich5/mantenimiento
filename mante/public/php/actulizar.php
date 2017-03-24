<?php 

$id =$_POST['id'];

$regis=$_POST['regis'];
$status=$_POST['status'];


include("conexion.php");

$consulta="UPDATE `establecimiento` SET `CuartosReg`= $regis,`status`= $status WHERE ID = '$id'";

$ejecutar  = $conexion->query(utf8_encode($consulta));



////////////////// 


 ?>
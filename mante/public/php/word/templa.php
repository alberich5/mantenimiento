<?php

//crear la conexion de la base de datos
$conexion=mysql_connect('localhost','root','')or die('no se pudo realizar la conexion');
mysql_select_db('mante',$conexion)or die('no se encuentra la bd');
//creo una fecha cualquiera



require_once dirname(__FILE__).'/PHPWord-master/src/PhpWord/Autoloader.php';
\PhpOffice\PhpWord\Autoloader::register();

use PhpOffice\PhpWord\TemplateProcessor;

$templateWord = new TemplateProcessor('plantilla.docx');
 
	$nombre=$_POST['nombre'];
	$tel=$_POST['tel'];
	$cliente=$_POST['cliente'];
	$email=$_POST['email'];
	$equipo=$_POST['equipo'];
	$mante=$_POST['mante'];
	$obser=$_POST['observacion'];
	$fecha=$_POST['fecha'];
	$marca=$_POST['marca'];
	$modelo=$_POST['modelo'];
	$serie=$_POST['serie'];
	
	//listadode opciones para cuando valla en blanco
	$l1=" ";
	$l2=" ";
	$l3=" ";
	$l4=" ";
	$l5=" ";
	$l6=" ";
	$l7=" ";
	$l8=" ";
	$l9=" ";
	$l10=" ";
	$l11=" ";
	$l12=" ";
	$l13=" ";
	$l14=" ";
	$otro=" ";



	$l1=$_POST['l1'];
	$l2=$_POST['l2'];
	$l3=$_POST['l3'];
	$l4=$_POST['l4'];
	$l5=$_POST['l5'];
	$l6=$_POST['l6'];
	$l7=$_POST['l7'];
	$l8=$_POST['l8'];
	$l9=$_POST['l9'];
	$l10=$_POST['l10'];
	$l11=$_POST['l11'];
	$l12=$_POST['l12'];
	$l13=$_POST['l13'];
	$l14=$_POST['l14'];
	$otro=$_POST['otro'];

	$listado=$l1."-".$l2."-".$l3."-".$l4."-".$l5."-".$l6."-".$l7."-".$l8."-".$l9."-".$l10."-".$l11."-".$l12."-".$l13."-".$l14;

$query=  "INSERT INTO `mantenimientos`( `nom_cliente`, `tel`, `email`, `area`, `equipo`, `marca`, `modelo`, `serie`, `mante`, `listado`, `observacion`, `fecha`) VALUES ( "
						."'".$nombre ."'".","."'".$tel."'".","."'".$email."'".","."'".$cliente."'".","."'".$equipo."'".","."'".$marca."'".","."'".$modelo."'".","."'".$serie."'".","."'".$mante."'".","."'".$listado."'".","."'".$obser."'".","."'".$fecha."')";
		mysql_query($query) or die(mysql_error());


//codigo para generar el folio
$conn = mysqli_connect('localhost','root','','mante');
$sql = "SELECT MAX(id) AS id FROM mantenimientos";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
$nuevo = $row[0];






// --- Asignamos valores a la plantilla
$templateWord->setValue('nombre',$nombre);
$templateWord->setValue('cliente',$cliente);
$templateWord->setValue('equipo',$equipo);
$templateWord->setValue('email',$email);
$templateWord->setValue('telefono',$tel);
$templateWord->setValue('mante',$mante);
$templateWord->setValue('obser',$obser);
$templateWord->setValue('folio',$nuevo);
$templateWord->setValue('fecha',$fecha);
$templateWord->setValue('marca',$marca);
$templateWord->setValue('modelo',$modelo);
$templateWord->setValue('serie',$serie);
$templateWord->setValue('otro',$otro);



$templateWord->setValue('l1',$l1);
$templateWord->setValue('l2',$l2);
$templateWord->setValue('l3',$l3);
$templateWord->setValue('l4',$l4);
$templateWord->setValue('l5',$l5);
$templateWord->setValue('l6',$l6);
$templateWord->setValue('l7',$l7);
$templateWord->setValue('l8',$l8);
$templateWord->setValue('l9',$l9);
$templateWord->setValue('l10',$l10);
$templateWord->setValue('l11',$l11);
$templateWord->setValue('l12',$l12);
$templateWord->setValue('l13',$l13);
$templateWord->setValue('l14',$l14);

// --- Guardamos el documento
$templateWord->saveAs('mante/'.$nuevo.'.docx');

header("Content-Disposition: attachment; filename=".$nuevo.".docx; charset=iso-8859-1");

echo file_get_contents('mante/'.$nuevo.'.docx');


        
?>

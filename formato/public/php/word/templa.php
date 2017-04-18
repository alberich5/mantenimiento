<?php

//crear la conexion de la base de datos
$conexion=mysql_connect('localhost','root','')or die('no se pudo realizar la conexion');
mysql_select_db('orden_salida',$conexion)or die('no se encuentra la bd');
//creo una fecha cualquiera



require_once dirname(__FILE__).'/PHPWord-master/src/PhpWord/Autoloader.php';
\PhpOffice\PhpWord\Autoloader::register();
//se especifica que tipo de documnto se va a usar del phpword
use PhpOffice\PhpWord\TemplateProcessor;

$templateWord = new TemplateProcessor('formato1.docx');
//variables captadas desde el formulario de index
	$pedido=$_POST['pedido'];
	$folio=$_POST['folio'];
	$recu=strtoupper($_POST['recurso']);
	$clave=strtoupper($_POST['clave']);
	$proveedor=strtoupper($_POST['proveedor']);
	$area=strtoupper($_POST['area']);
	$articulo=strtoupper($_POST['articulo']);
	$unidad=strtoupper($_POST['unidad']);
	$cantidad=$_POST['cantidad'];
	$nota=strtoupper($_POST['nota']);
	$dia=date('d');
	$mes=date('m');
	$ano=date('y');
	$fecha = $ano."-".$mes."-".$dia;
	$atendio=$_GET['name'];

//insertar consulta en la bd
$query=  "INSERT INTO `orden`(`pedido`, `folio`, `recurso`, `clave`, `proveedor`, `area`, `articulo`, `unidad`, `cantdad`, `nota`, `atendio`, `fecha`) VALUES ( "
						."'".$pedido ."'".","."'".$folio."'".","."'".$recu."'".","."'".$clave."'".","."'".$proveedor."'".","."'".$area."'".","."'".$articulo."'".","."'".$unidad."'".","."'".$cantidad."'".","."'".$nota."'".","."'".$atendio."'".","."'".$fecha."')";

		mysql_query($query) or die(mysql_error());

$nuevo=time();


//agregra ala plantilla
$templateWord->setValue('pedi',$pedido);
$templateWord->setValue('fol',$folio);
$templateWord->setValue('recu',$recu);
$templateWord->setValue('clave',$clave);

$templateWord->setValue('proveedor',$proveedor);
$templateWord->setValue('area',$area);
$templateWord->setValue('articulo',$articulo);
$templateWord->setValue('cant',$cantidad);
$templateWord->setValue('unidad',$unidad);
$templateWord->setValue('nota',$nota);
$templateWord->setValue('dia',$dia);
$templateWord->setValue('mes',$mes);
$templateWord->setValue('ano',$ano);
$templateWord->setValue('atendio',$atendio);

// --- Guardamos el documento
$templateWord->saveAs('mante/'.$nuevo.'.docx');

header("Content-Disposition: attachment; filename=".$nuevo.".docx; charset=iso-8859-1");

echo file_get_contents('mante/'.$nuevo.'.docx');


        
?>


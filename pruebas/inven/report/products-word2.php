<?php
include "../core/autoload.php";
include "../core/app/model/ProductData.php";
include "../core/app/model/CategoryData.php";

require_once '../PhpWord/Autoloader.php';
use PhpOffice\PhpWord\Autoloader;
use PhpOffice\PhpWord\Settings;

Autoloader::register();




//le decimos a phpword que vamos a usar el procesador de plantillas
use PhpOffice\PhpWord\TemplateProcessor;
//guardamos un objecto de templateprocessor y asinamos ubicacion de la plantilla

$templateWord = new TemplateProcessor('formato2.docx');
//Optengo todos los productos
$products = ProductData::getAll();




//creo el ciclo para optener el listado
$templateWord->cloneRow('nombre',count($products));
for($i=0;$i<count($products);$i++)
{

$templateWord->setValue('nombre#'.$i,$products[$i]->name);
$templateWord->setValue('presentacion#'.$i,$products[$i]->presentation);
$templateWord->setValue('categoria#'.$i,$products[$i]->getCategory()->name);
$templateWord->setValue('minima#'.$i,$products[$i]->inventary_min);
$templateWord->setValue('activo#'.$i,$products[$i]->is_active);



}






// --- Guardamos el documento
$templateWord->saveAs('Formato.docx');
//agregamos la cabecera para descargar el documentos desde php
header("Content-Disposition: attachment; filename=Lista.docx; charset=iso-8859-1");
echo file_get_contents('Formato.docx');


?>
<?php
include "../core/autoload.php";
include "../core/app/model/ProductData.php";
include "../core/app/model/OperationData.php";
include "../core/app/model/OperationTypeData.php";

require_once '../PhpWord/Autoloader.php';
use PhpOffice\PhpWord\Autoloader;
use PhpOffice\PhpWord\Settings;

Autoloader::register();


//le decimos a phpword que vamos a usar el procesador de plantillas
use PhpOffice\PhpWord\TemplateProcessor;
//guardamos un objecto de templateprocessor y asinamos ubicacion de la plantilla

$templateWord = new TemplateProcessor('alertas.docx');
$products = ProductData::getAll();


//clonar fila
$templateWord->cloneRow('id',count($products));


// --- guardamos el documento
$templateWord->saveAs('format.docx');
//agregamos la cabecera para descargar el documentos desde php
header("content-disposition: attachment; filename=lista.docx; charset=iso-8859-1");
echo file_get_contents('format.docx');


?>
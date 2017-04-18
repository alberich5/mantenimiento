<?php
include "../core/autoload.php";
include "../core/app/model/ProductData.php";
include "../core/app/model/CategoryData.php";
include "../core/app/model/OperationData.php";
include "../core/app/model/OperationTypeData.php";

require_once '../PhpWord/Autoloader.php';
use PhpOffice\PhpWord\Autoloader;
use PhpOffice\PhpWord\Settings;

Autoloader::register();


//Le decimos a phpword que vamos a usar el Procesador de plantillas
use PhpOffice\PhpWord\TemplateProcessor;
//Guardamos un objecto del templateProcessor 

$templateWord = new TemplateProcessor('formato3.docx');

//objectos pára la busqueda
$product = ProductData::getById($_GET["id"]);
$operations = OperationData::getAllByProductId($product->id);
$entradas = OperationData::GetInputQYesF($product->id);
$disponibles = OperationData::GetQYesF($product->id);
$salidas = -1*OperationData::GetOutputQYesF($product->id);

//elementos a sustituir en la plantilla

$templateWord->setValue('titulo',$product->name);
$templateWord->setValue('entrada',$entradas);
$templateWord->setValue('disponible',$disponibles);
$templateWord->setValue('salida',$salidas);

$templateWord->cloneRow('cantidad',count($operations));
for($i=0;$i<count($operations);$i++)
{

$templateWord->setValue('cantidad#'.$i,$operations[$i]->q);
$templateWord->setValue('tipo#'.$i,$operations[$i]->getOperationType()->name);
$templateWord->setValue('fecha#'.$i,$operations[$i]->created_at);
 

}




// --- Guardamos el documento
$templateWord->saveAs('Formato.docx');
//agregamos la cabecera para descargar el documentos desde php
header("Content-Disposition: attachment; filename=Historial".time().".docx; charset=iso-8859-1");
echo file_get_contents('Formato.docx');




?>
<?php
$debug= true;
if($debug){
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
}
include "../core/autoload.php";
include "../core/app/model/PersonData.php";

require_once '../PhpWord/Autoloader.php';
use PhpOffice\PhpWord\Autoloader;
use PhpOffice\PhpWord\Settings;

Autoloader::register();

//le decimos a phpword que vamos a usar el procesador de plantilla
use PhpOffice\PhpWord\TemplateProcessor;
//guardamos un objecto de templateprocessor y asinamos ubicacion de la plantilla

$templateWord = new TemplateProcessor('clientes.docx');
$clients = PersonData::getClients();



$templateWord->cloneRow('nombre',count($clients));
for($i=0;$i<count($clients);$i++)
{

$templateWord->setValue('nombre#'.$i,$clients[$i]->name." ".$client->lastname);
$templateWord->setValue('dire#'.$i,$clients[$i]->address1);
$templateWord->setValue('email#'.$i,$clients[$i]->email1);
$templateWord->setValue('tipo#'.$i,$clients[$i]->phone1);

}

// --- Guardamos el documento
$templateWord->saveAs('Formato.docx');
//agregamos la cabecera para descargar el documentos desde php
header("Content-Disposition: attachment; filename=Clientes".time().".docx; charset=iso-8859-1");
echo file_get_contents('Formato.docx');




?>
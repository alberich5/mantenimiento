<?php
// --- imposrtamos la libreria
require_once dirname(__FILE__).'/PHPWord-master/src/PhpWord/Autoloader.php';
\PhpOffice\PhpWord\Autoloader::register();

use PhpOffice\PhpWord\TemplateProcessor;
// --- se jala la plantilla de work
$templateWord = new TemplateProcessor('ofi3.docx');
 // --- se sustituyen las variables encontradas en el work
$nombre = "OMAR ZARATE HIPOLITO";
$edad = "25";
$fecha="10 de enero del 2016";
$domicilio="";



// --- Asignamos valores a la plantilla
$templateWord->setValue('nombre',$nombre);
$templateWord->setValue('edad',$edad);
$templateWord->setValue('fecha',$fecha);



// --- Guardamos el documento
$templateWord->saveAs('contratos/Contrato.docx');
// --- cabecera del documento
header("Content-Disposition: attachment; filename=Contrato".$nip.".docx; charset=iso-8859-1");
echo file_get_contents('contratos/Contrato.docx');
        
?>
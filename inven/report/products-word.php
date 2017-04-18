<?php
include "../core/autoload.php";
include "../core/app/model/ProductData.php";
include "../core/app/model/CategoryData.php";

require_once '../PhpWord/Autoloader.php';
use PhpOffice\PhpWord\Autoloader;
use PhpOffice\PhpWord\Settings;

Autoloader::register();

$word = new  PhpOffice\PhpWord\PhpWord();
$products = ProductData::getAll();


$section1 = $word->AddSection();
$section1->addImage('logito.png', array('width' => 110, 'height' => 110, 'align' => 'left', 'wrappingStyle' => 'behind'));
$section1->addText("SECRETARÍA DE SEGURIDAD PÚBLICA DE OAXACA ",array("align"=>"right"));
$section1->addText("LISTADO DE PRODUCTOS",array("size"=>22,"bold"=>true,"align"=>"right"));



$styleTable = array('borderSize' => 6, 'borderColor' => 'E2AFFF', 'cellMargin' => 40);
$styleFirstRow = array('borderBottomColor' => 'E2AFFF', 'bgColor' => 'ADEDFF');

$table1 = $section1->addTable("table1");
$table1->addRow();
$table1->addCell()->addText("Id");
$table1->addCell()->addText("Nombre");
$table1->addCell()->addText("Presentacion");
$table1->addCell()->addText("Categoria");
$table1->addCell()->addText("Minima en Inv.");
$table1->addCell()->addText("Activo");
foreach($products as $product){
$table1->addRow();
$table1->addCell(500)->addText($product->id);
$table1->addCell(5000)->addText($product->name);
$table1->addCell(2000)->addText($product->presentation);
if($product->category_id!=null){
	$table1->addCell(2000)->addText($product->getCategory()->name);

}else{
	$table1->addCell(2000)->addText("---");
}
$table1->addCell(2000)->addText($product->inventary_min);
if($product->is_active){
$table1->addCell(100)->addText("Si");
}else{
$table1->addCell(100)->addText("No");
}
}

$word->addTableStyle('table1', $styleTable,$styleFirstRow);
/// datos bancarios

$filename = "products-".time().".docx";
#$word->setReadDataOnly(true);
$word->save($filename,"Word2007");
//chmod($filename,0444);
header("Content-Disposition: attachment; filename='$filename'");
readfile($filename); // or echo file_get_contents($filename);
unlink($filename);  // remove temp file



?>
<?php 
// --- imposrtamos la libreria
require_once dirname(__FILE__).'/PHPWord-master/src/PhpWord/Autoloader.php';
\PhpOffice\PhpWord\Autoloader::register();

use PhpOffice\PhpWord\TemplateProcessor;
// --- se jala la plantilla de work
$templateWord = new TemplateProcessor('oficio.docx');
 // --- se sustituyen las variables encontradas en el work
$nip="";
$user = "postgres";
$password = "postgres";
$dbname = "todo";
$port = "5433";
$host = "localhost";

$cadenaConexion = "host=$host port=$port dbname=$dbname user=$user password=$password";

$conexion = pg_connect($cadenaConexion) or die("Error en la Conexión: ".pg_last_error());
echo "<h3>Conexion Exitosa PHP - PostgreSQL</h3><hr><br>";
$nip=1;




		$sql = "SELECT * FROM persona ";
		// Ejecutar la consulta:
		$rs = pg_query( $conexion, $sql );

		if( $rs )
		{
			// Obtener el número de filas:
			if( pg_num_rows($rs) > 0 )
			{
				echo "<p/>LISTADO DE PERSONAS<br/>";
				echo "===================<p />";


				// Recorrer el resource y mostrar los datos:
				while( $objFila = pg_fetch_object($rs) )
					
					$templateWord->setValue('nombre_director',"omar");
					$templateWord->setValue('nombre_alumno',"Zarate");
					// --- Guardamos el documento
					$templateWord->saveAs('contratos/Contrato'.$nip.'.docx');
					// --- cabecera del documento
					header("Content-Disposition: attachment; filename=Contrato".$nip.".docx; charset=iso-8859-1");
					echo file_get_contents('contratos/Contrato'.$nip.'.docx');
										
					echo $objFila->idpersona." - ".$objFila->nombre." - ".$objFila->apellido1." - ".$objFila->apellido2."<br />";
					// --- Asignamos valores a la plantilla
					$nip=$nip++;




			}
			else
				echo "No se encontraron personas<br />";
		}
		
	

 ?>
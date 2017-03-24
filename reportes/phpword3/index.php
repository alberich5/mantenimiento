<?php 
$user = "postgres";
$password = "postgres";
$dbname = "todo";
$port = "5433";
$host = "localhost";

$cadenaConexion = "host=$host port=$port dbname=$dbname user=$user password=$password";

$conexion = pg_connect($cadenaConexion) or die("Error en la Conexión: ".pg_last_error());
echo "<h3>Conexion Exitosa PHP - PostgreSQL</h3><hr><br>";





		$sql = "SELECT * FROM persona ORDER BY nombre";
		

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
					echo $objFila->idpersona." - ".$objFila->nombre." - ".$objFila->apellido1." - ".$objFila->apellido2."<br />";
			}
			else
				echo "No se encontraron personas<br />";
		}
		
	

 ?>
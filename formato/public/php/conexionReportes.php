<?php 

  $conexion = new mysqli('localhost','root','','styde',3306);
	if (mysqli_connect_errno()) {
    	printf("La conexión con el servidor de base de datos falló: %s\n", mysqli_connect_error());
    	exit();
	}
	$consulta = "select establecimiento.Nombre, Fecha, sum(CtosDisp) as Disponible,sum(CtosOcup) as ocupados, (sum(CtosOcup)/sum(CtosDisp)*100) as promedio 
			from ocupacion INNER JOIN establecimiento on ocupacion.id_est = establecimiento.ID where establecimiento.Cve_Local = $local and Fecha BETWEEN '$fecha1' AND '$fecha2'
			 GROUP BY establecimiento.ID ORDER BY establecimiento.categoria";

	$consulta2 = "select Fecha, sum(CtosDisp) as Disponible,sum(CtosOcup) as ocupados, (sum(CtosOcup)/sum(CtosDisp)*100) as promedio 
			from ocupacion INNER JOIN establecimiento on ocupacion.id_est = establecimiento.ID where establecimiento.Cve_Local = $local and Fecha BETWEEN '$fecha1' AND '$fecha2'
			 GROUP BY ocupacion.Fecha ORDER BY ocupacion.Fecha";
 ?>
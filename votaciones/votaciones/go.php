<?php
	// Recibimos la ID del vinculo desde la URL
	$id = $_REQUEST['id'];
	
	mysql_connect("servidor", "usuario", "contraseña") or die(mysql_error());
	mysql_select_db("baseDatos") or die(mysql_error());

	// Incrementamos en 1 el contador del link con la ID especificada en la url
	$update = "UPDATE votaciones SET clicks=(clicks + 1) WHERE id='$id'";
	mysql_query($update) or die (mysql_error());

?>	

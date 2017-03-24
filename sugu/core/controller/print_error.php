<?php
#Evitar errores lego-web (22/10/2016)

#Evitamos que muestre error por pantalla si hemos definido la variable como 0
if($print_error='0'){
	#No mostramos errores
	error_reporting(0);

}

?>
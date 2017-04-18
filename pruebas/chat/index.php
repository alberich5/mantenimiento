<html>
<head>		
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>		
<meta charset="UTF-8"/>	
<style type="text/css">
	
.boton{
	font-size: 15px;
	color: #FFF;
	background-color: #0040FF;
	border-radius: 5px;
}
#chat{

	width: 19%;
	padding: 5px;
	float: right;
}

</style>		

	</head>
<body>
<div id="chat">
	
<center><h3>Chat de comunacion para el sistema de mantenimiento</h3></center>
	<div id="mostrar_mensaje" style="height:240px;  border: 1px solid #CCCCCC; padding: 12px; width:300px;border-radius: 5px; overflow-x: hidden; background-color: #EDF4FA;">
		
	</div>	

	<br>
	El nombre de la Area: <br>
	<input type="text" name="nombre" id="nombre" placeholder="Delegacion"><br><br>
	Escribe tu mensaje:<br>
	<textarea id="mensaje" name="mensaje" maxlength="100" cols="48" rows="4" placeholder="EScrie tu comentario hacia el administrador"></textarea><br><br>
	<input type="button" name="enviar" id="enviar" value="ENVIAR" class="boton" onclick="enviar_insert();">

</div>



<script type="text/javascript">
	
	function enviar_insert(){

		var nombre = document.getElementById("nombre").value;
		var mensaje = document.getElementById("mensaje").value;

		var paramentros = {

				"nnombre" : nombre,
				"mmensaje" : mensaje,
				"pconsulta"	: "consulta",
		};

		$.ajax({

			data: paramentros,
			url: 'valida_ajax.php',
			type: 'POST',
		});

		limpiar_datos();

	}

setInterval("mostrar_enviado()",500);
mostrar_enviado();

	function mostrar_enviado(){

		var parametros = {
			"pconsulta" : "mostrar_mensajes",
		}		

		$.ajax({
			data: parametros,
			url: 'valida_ajax.php',
			type: 'POST',
			befforesed: function(){
			},
			success: function (response){
				document.getElementById("mostrar_mensaje").innerHTML=response;
				var abajo=$("#mostrar_mensaje").prop("scrollHeight");
				$("#mostrar_mensaje").scrollTop(abajo)				
			}
		});		
		
	}

function limpiar_datos(){
	
	document.getElementById("mensaje").value="";

}

</script>

</body>
</html>


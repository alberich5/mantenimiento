

@section('content')
<br><br><br><br><br><br>
	<div class="form-group" id="sesiones">
		<span ><a id="liga" href="{{ url('/auth/logout') }}" >Cerrar Sesion de  {{ Auth::user()->name }}</a></span><br>
	</div >

<div class="formulario">

	<div class="form-group">
	<center><h1>Formato para el Mantenimiento de Equipos</h1></center>
	</div>
	<p id="campos"><span class="glyphicon glyphicon-leaf" aria-hidden="true"></span> Campos Obligatorios.</p>
	<div id="cerrar">
		
		@if (Auth::user()->name == 'Noe' or Auth::user()->name == 'Nestor')
            <span class="label label-success"><a id="liga1" href="{{ url('/noe') }}" >Entrar admin </a></span>       
  		@endif
	</div>
		@include('alertas.success')
		@include('errors.mensaje')

		<form   method="POST" action="{{ asset('/php/word/templa.php') }}" id="myForm">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	    	 <div class="form-group">
	    		<span id="campos" class="glyphicon glyphicon-leaf" aria-hidden="true"></span>{!! Form::label('Nombre Completo de quien reporta:') !!}
	    		{!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Coloca tu nombre completo','required']) !!}
	    	</div>
	    	<div class="form-group">
	    		<span id="campos" class="glyphicon glyphicon-leaf" aria-hidden="true"></span>{!! Form::label('Telefono:') !!}
	    		{!! Form::text('tel',null,['class'=>'form-control','placeholder'=>'Coloca tu telefono','required']) !!}
	    	</div>
	    	<div class="form-group">
	    		<span id="campos" class="glyphicon glyphicon-leaf" aria-hidden="true"></span>{!! Form::label('Correo Electronico:') !!}
	    		{!! Form::email('email',null,['class'=>'form-control','placeholder'=>'Ingresa Correo Electronico','required']) !!}
	    	</div>
			<div class="form-group">
	    		{!! Form::label('Area - Departamento - Delegacion:') !!}
	    		{!! Form::select('cliente', ['Auditoria' => 'Auditoria',
	    									'Departamento de Asuntos Juricos' => 'Departamento de Asuntos Juricos',
	    									'Coordinación Operativa' => ' Coordinación Operativa',
	    									'Huajuapan de Leon Oaxaca (I Delegación)' => 'Huajuapan de Leon Oaxaca (I Delegación)',
	    									'San Juan Bautista Tuxtepec Oaxaca ( II Delegación)' => ' San Juan Bautista Tuxtepec Oaxaca ( II Delegación)',
	    									'Matias Romero ( III Delegación) ' => 'Matias Romero ( III Delegación) ',
	    									'Delegacion Regional de Valles Centrales' => 'Delegacion Regional de Valles Centrales',
	    									'Juchitan de Zaragoza ( IV Delegación)' => 'Juchitan de Zaragoza ( IV Delegación)',
	    									'Salina Cruz Oaxaca' => 'Salina Cruz Oaxaca',
	    									'Regional La Venta' => 'Regional La Venta',
	    									'Puerto Escondido Oaxaca ( V Delegación)' => 'Puerto Escondido Oaxaca ( V Delegación)',
	    									'Huatulco' => 'Huatulco',
	    									'Pinotepa Nacional' => 'Pinotepa Nacional',
	    									'Comandancia de Servicios' => 'Comandancia de Servicios',
	    									'Cuartel' => 'Cuartel',
	    									'Departamento de Cobranzas' => 'Departamento de Cobranzas',
	    									'Departamento de Servicios Generales y Recursos Materiales' => 'Departamento de Servicios Generales y Recursos Materiales',
	    									'Departamento de Recursos Humanos y Selección de Personal' => 'Departamento de Recursos Humanos y Selección de Personal',
	    									'Unidad de Comercializacion y Servicio a Clientes' => 'Unidad de Comercializacion y Servicio a Clientes',
	    									'Departamento de Comercialización' => 'Departamento de Comercialización',
	    									'Departamento de Armamentos' => 'Departamento de Armamento',
	    									 'Cobranzas' => 'Cobranzas'],null,['class'=>'form-control']) !!}
	    	</div>
	    	<div class="form-group">
	    		{!! Form::label('Tipo de Equipo:') !!}
	    		{!! Form::select('equipo', ['Computadora de Escritorio' => 'Computadora de Escritorio',
	    									'impresora' => 'Impresora',
	    									'escaner' => 'Escaner',
	    									 'laptop' => 'Laptop'],null,['class'=>'form-control']) !!}<br>
	    		<label>Marca:<input type="text" name="marca" value="" placeholder="Marca del Equipo"></label>
	    		<label>Modelo:<input type="text" name="modelo" value="" placeholder="Modelo del Equipo"></label>
	    		<label>Serie:<input type="text" name="serie" value="" placeholder="Serie del Equipo"></label>
	    	</div>

	    	<div class="form-group">
	    		{!! Form::label('Tipo de Mantenimiento:') !!}
	    		<select id="status"  class="form-control" name="status" onChange="mostrar(this.value);">
			        <option value="correctivo">correctivo</option>
			        <option value="preventivo">Preventivo</option>
			        <option value="autonomo">otro</option>
			      
    			 </select>
	    	</div>
	    	<div class="form-group">
	    		{!! Form::label('Listado:') !!}<br>
	    		<div id="autonomo" class="element" style="display: none;">
		    		<TABLE border="0">
						<TR>
							<TD><input type="checkbox" name="l1" value="No prende / No inicia" />No prende / No inicia</TD> 
							<TD><input type="checkbox" name="l2" value="Se reinicia/" />Se reinicia</TD> 
							<TD><input type="checkbox" name="l3" value="Malware (virus)/" />Malware (virus)</TD>
							<TD><input type="checkbox" name="l4" value="Bloqueo / Lentitud/" />Bloqueo / Lentitud</TD>
							<TD><input type="checkbox" name="l5" value="Sistema Operativo/" />Sistema Operativo<br></TD>
						</TR>
						<TR>
							<TD><input type="checkbox" name="l6" value="Mensaje de error/" />Mensaje de error</TD> 
							<TD><input type="checkbox" name="l7" value="Problema con el Mouse/" />Problema con el Mouse </TD> 
							<TD><input type="checkbox" name="l8" value="Problema con el Teclado/" />Problema con el Teclado</TD>
							<TD><input type="checkbox" name="l9" value="Problema con el Monitor/" />Problema con el Monitor</TD> 
							<TD><input type="checkbox" name="l10" value="Problema con el CPU/" />Problema con el CPU</TD>
						</TR>
						<TR>
							<TD><input type="checkbox" name="l11" value="Actualización de Antivirus/" />Actualización de Antivirus</TD> 
							<TD><input type="checkbox" name="l12" value="Respaldo de Información/" />Respaldo de Información </TD> 
							<TD><input type="checkbox" name="l13" value="Conexión a la red/" />Conexión a la red</TD>
							<TD><input type="checkbox" name="l14" value="Microsoft Office/" />Microsoft Office</TD> 
							<TD><label>Otro:<input type="text" name="otro" value="" placeholder="Algun otro Problema"></label></TD>
						</TR>
					</TABLE> 
				</div>       
                     
	    		
	    	</div>
	    	<div class="form-group">
	    		{!! Form::label('Observaciones del equipo:') !!}
	    		{!! Form::textarea('observacion',null,['class'=>'form-control','placeholder'=>'Ejemplo. Especifique Algun detalle que haya notado en el equipo']) !!}
	    	</div>
			<div class="form-group">
	    		{!! Form::label('Fecha de Reporte:') !!}
	    		{!! Form::date('fecha', \Carbon\Carbon::now(),['class'=>'form-control']) !!}
	    </div>
	    	
	    	

	    	<div class="form-group">
	    		{!! Form::submit('Guardar y Descargar',['class'=>'btn btn-primary']) !!}
	    		<input type="submit" name="" value="limpiar" class="btn btn-primary" onclick="formReset()">
	    	
	    	
			</div>

			 <?php
		 header("location: prueba.php");
		 ?>
	    	
		</form>
</div>



<div id="chat">
	
<center><h3>Chat</h3></center>
	<div id="mostrar_mensaje" style="height:240px;  border: 1px solid #CCCCCC; padding: 12px; width:280px;border-radius: 5px; overflow-x: hidden; background-color: #EDF4FA;">
		
	</div>	

	<br>
	Tu Delegacion: <br>
	<input type="text" name="nombre" id="nombre" style="background-color: #EDF4FA;"><br><br>
	Mensaje:<br>
	<textarea id="mensaje" name="mensaje" maxlength="100" cols="40" rows="4" style="background-color: #EDF4FA;"></textarea><br><br>
	<input type="button" name="enviar" class="btn btn-success" id="enviar" value="ENVIAR" class="boton" onclick="enviar_insert();">

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
			url: '{{ asset('/php/valida_ajax.php') }}',
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
			url: '{{ asset('/php/valida_ajax.php') }}',
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
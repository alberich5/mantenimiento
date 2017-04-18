
@section('content')
<br><br><br>
	<div class="form-group" id="sesiones">
		<span ><a id="liga" href="{{ url('/auth/logout') }}" >Cerrar Sesion de  {{ Auth::user()->name }}</a></span><br>
	</div >
<div class="formulario">

	<div class="form-group">
	<center><h1>Formato de Orden de Salida</h1></center>
	</div>
	
	<div id="cerrar">
		
		@if (Auth::user()->name == 'Noe' or Auth::user()->name == 'Nestor')
            <span class="label label-success"><a id="liga1" href="{{ url('/noe') }}" >Entrar admin </a></span>       
  		@endif
	</div>
		@include('alertas.success')
		@include('errors.mensaje')

		<form   method="POST" action="{{ asset('/php/word/templa.php?name=') }}{{ Auth::user()->name }}" id="myForm">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	    	 <div class="form-group">
	    		{!! Form::label('No.de Pedido:') !!}
	    		{!! Form::text('pedido',null,['class'=>'form-control','placeholder'=>'No. de pedido','required']) !!}
	    	</div>
	    	<div class="form-group">
	    		{!! Form::label('Folio:') !!}
	    		{!! Form::text('folio',null,['class'=>'form-control','placeholder'=>'Folio','required']) !!}
	    	</div>
	    	<div class="form-group">
	    		{!! Form::label('Recurso:') !!}
	    		{!! Form::select('recurso', ['Directo' => 'DIRECTO',
	    									 'Consolidado' => 'CONSOLIDADO'],null,['class'=>'form-control']) !!}
	    	</div>
	    	<div class="form-group">
	    		{!! Form::label('Clave Presupuestal:') !!}
	    		{!! Form::text('clave',null,['class'=>'form-control','placeholder'=>'Clave Presupuestal','style'=>'text-transform: uppercase','required']) !!}
	    	</div>
	    	<div class="form-group">
	    		{!! Form::label('Proveedor:') !!}
	    		{!! Form::text('proveedor',null,['class'=>'form-control','placeholder'=>'Proveedor','style'=>'text-transform: uppercase']) !!}
	    	</div>

	    	<div class="form-group">
	    		{!! Form::label('Area Beneficiada:') !!}
	    		{!! Form::select('area', ['Sistemas' => 'SISTEMAS',
	    									'Recursos Humanos' => 'RECURSOS HUMANOS',
	    									'COMERCIALIZACION' => 'COMERCIALIZACION',
	    									'COBRANZAS' => 'COBRANZAS',
	    									'FINANZAS' => 'FINANZAS',
	    									'JURIDICO' => 'JURIDICO',
	    									'SERVICIOS GENERALES' => 'SERVICIOS GENERALES',
	    									 'Auditoria' => 'AUDITORIA'],null,['class'=>'form-control']) !!}
	    	</div>
	    	<div class="form-group">
	    		{!! Form::label('Descripcion de Articulos:') !!}<br>
	    		<label>Articulo:<input type="text" name="articulo" value="" placeholder="Nombre del Articulo" style="text-transform: uppercase"></label>
	    		<label>Unidad:<input type="text" name="unidad" value="" placeholder="Unidad" style="text-transform: uppercase"></label>
	    		<label>Cantidad:<input type="number" name="cantidad" value="" placeholder="Cantidad"></label>

	    	</div>
	    	<div class="form-group">
	    		{!! Form::label('Nota:') !!}
	    		{!! Form::text('nota',null,['class'=>'form-control','placeholder'=>'Agregar Nota','style'=>'text-transform: uppercase']) !!}
	    	</div>
		
	    	
	    	

	    	<div class="form-group">
	    		{!! Form::submit('Descargar',['class'=>'btn btn-primary']) !!}
			</div>

			
		</form>
</div>


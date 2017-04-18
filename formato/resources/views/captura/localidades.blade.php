@extends('layout.plantilla')

@section('content')

	<div class="formulario">
		@include('alertas.success')

		@include('errors.mensaje')
		
		{!! Form::open(['route'=>'localidad.store','method'=>'POST']) !!}
	    	 <div class="form-group">
	    		{!! Form::label('Nombre de la Localidad:') !!}
	    		{!! Form::text('name',null,['class'=>'form-control','placeholder'=>'ingresa el nombre']) !!}
	    	</div>
	    	<div class="form-group">
	    		{!! Form::label('Folio:') !!}
	    		{!! Form::number('folio',null,['class'=>'form-control','placeholder'=>'ingresa el folio']) !!}
	    	</div>
	    	<div class="form-group">
	    	{!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
			</div>
		{!! Form::close() !!}
	</div>


@endsection
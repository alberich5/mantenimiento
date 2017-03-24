@extends('layout.plantilla')

@section('content')


	<div class="formulario">
		
		<p>{{{$local->nom_local}}}</p>
		
		
		
		{!! Form::open(['route'=>'localidad.update','method'=>'PUT']) !!}
	    	 <div class="form-group">
	    		{!! Form::label('Nombre de la Localidad:') !!}
	    		{!! Form::text('name',null,['class'=>'form-control','placeholder'=>'ingresa el nombre']) !!}
	    	</div>
	    	<div class="form-group">
	    		{!! Form::label('Folio:') !!}
	    		{!! Form::number('folio',null,['class'=>'form-control','placeholder'=>'ingresa el folio']) !!}
	    	</div>
	    	<div class="form-group">
	    	{!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
			</div>
		{!! Form::close() !!}
	</div>

@endsection
@extends('layout.plantilla')


@section('content')
	
<div class="formulario">

		@include('alertas.success')
		@include('errors.mensaje')

		{!! Form::open(['route'=>'establecimiento.store','method'=>'POST']) !!}
	    	 <div class="form-group">
	    		{!! Form::label('nombre:') !!}
	    		{!! Form::text('name',null,['class'=>'form-control','placeholder'=>'ingresa el nombre']) !!}
	    	</div>

	    	<div class="form-group">
	    		{!! Form::label('Categoria:') !!}
	    		{!! Form::select('cate', ['1' => '1',
	    									 '2' => '2',
	    									 '3' => '3','
	    									  4' => '4',
	    									 '5' => '5'],null,['class'=>'form-control']) !!}
	    	

	    	<div class="form-group">
	    		{!! Form::label('Localidad:') !!}
	    		<select name="local" id="" class="form-control">
		    		@foreach($local as $localidad)			          
			            <option value='{{{$localidad->cve_local}}}'>{{{$localidad->nom_local}}}</option>
			        @endforeach
		        </select>
	    	</div>

	    	<div class="form-group">
	    		{!! Form::label('No. de Cuartos:') !!}
	    		{!! Form::number('cuartos',null,['class'=>'form-control','placeholder'=>'Numero de cuartos']) !!}
	    	</div>
	    	<div class="form-group">
	    		{!! Form::label('Acticvo:') !!}
	    		{!! Form::radio('status', '1') !!}
	    		{!! Form::label('No Acticvo:') !!}
	    		{!! Form::radio('status', '0') !!}
	    	</div>

	    	<div class="form-group">
	    		{!! Form::submit('Guardar',['class'=>'btn btn-primary']) !!}
			</div>
	    	
		{!! Form::close() !!}
</div>

@endsection
@extends('layout.plantilla')

@section('content')

	<div class="formulario">
		{!! Form::open(['route'=>'precio.store','method'=>'POST']) !!}
			 <div class="form-group">
	    		{!! Form::label('fecha:') !!}
	    		{!! Form::date('date', \Carbon\Carbon::now()) !!}
	    	 </div>
	    	 <div class="form-group">
	    		{!! Form::label('Precio Cuadruple:') !!}
	    		{!! Form::number('cuadruple',null,['class'=>'form-control','placeholder'=>'ingresa el precio']) !!}
	    	 </div>
	    	 <div class="form-group">
	    		{!! Form::label('Precio Triple:') !!}
	    		{!! Form::number('triple',null,['class'=>'form-control','placeholder'=>'ingresa el precio']) !!}
	    	 </div>
	    	 <div class="form-group">
	    		{!! Form::label('Precio Doble:') !!}
	    		{!! Form::number('doble',null,['class'=>'form-control','placeholder'=>'ingresa el precio']) !!}
	    	 </div>
	    	 <div class="form-group">
	    		{!! Form::label('Precio Secilllo:') !!}
	    		{!! Form::number('sencillo',null,['class'=>'form-control','placeholder'=>'ingresa el precio']) !!}
	    	 </div>

	    	 <div class="form-group">
	    		{!! Form::label('Establecimiento:') !!}
	    		{!! Form::select('estable', array('1' => 'Cd De Oaxaca',
	    									 '2' => 'Bahías de Huatulco',
	    									 '3' => 'PuertoEscondido','
	    									  4' => 'Istmo',
	    									  '5' => 'Tuxtepec',
	    									  '6' => 'Juquila',
	    									  '7' => 'Mixteca')) !!}
	    	</div>
	    	<div class="form-group">
	    		{!! Form::submit('Guardar',['class'=>'btn btn-primary']) !!}
			</div>

		{!! Form::close() !!}
	</div>
	


@endsection
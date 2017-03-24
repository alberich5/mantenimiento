@extends('layout.plantilla')

@section('content')


<div class="formulario">
<h4>REPORTE DETALLADO POR PERIODO</h4>
<form   method="POST" action="{{ asset('/php/reporte1.php') }}">
	<input type="hidden" name="_token" value="{{ csrf_token() }}"> 

	<div class="form-group">
	    		{!! Form::label('Localidad:') !!}
	    		{!! Form::select('local', array('1' => 'Cd De Oaxaca',
	    									 '2' => 'Bahías de Huatulco',
	    									 '3' => 'PuertoEscondido','
	    									  4' => 'Istmo',
	    									  '5' => 'Tuxtepec',
	    									  '6' => 'Juquila',
	    									  '7' => 'Mixteca'),null,['class'=>'form-control']) !!}
	    </div>
		<div class="form-group">
	    		{!! Form::label('Periodo Inicial:') !!}
	    		{!! Form::date('fecha1', \Carbon\Carbon::now(),['class'=>'form-control']) !!}
	    </div>
	    <div class="form-group">
	    		{!! Form::label('Periodo Final:') !!}
	    		{!! Form::date('fecha2', \Carbon\Carbon::now(),['class'=>'form-control']) !!}
	    </div>

	<div class="form-group">
	    	{!! Form::submit('Descargar',['class'=>'btn btn-primary']) !!}
	    	<a href="{{ asset('/php/grafica/index.php') }}" >ver grafica</a>
	</div>


</form>
</div><br>

<div class="formulario">
<h4>REPORTE POR DIA Y LOCALIDAD</h4>
<form   method="POST" action="{{ asset('/php/reporte2.php') }}">
	<input type="hidden" name="_token" value="{{ csrf_token() }}"> 

	<div class="form-group">
	    		{!! Form::label('Localidad:') !!}
	    		{!! Form::select('local', array('1' => 'Cd De Oaxaca',
	    									 '2' => 'Bahías de Huatulco',
	    									 '3' => 'PuertoEscondido','
	    									  4' => 'Istmo',
	    									  '5' => 'Tuxtepec',
	    									  '6' => 'Juquila',
	    									  '7' => 'Mixteca'),null,['class'=>'form-control']) !!}
	    </div>
		<div class="form-group">
	    		{!! Form::label('Periodo Inicial:') !!}
	    		{!! Form::date('fecha1', \Carbon\Carbon::now(),['class'=>'form-control']) !!}
	    </div>
	    <div class="form-group">
	    		{!! Form::label('Periodo Final:') !!}
	    		{!! Form::date('fecha2', \Carbon\Carbon::now(),['class'=>'form-control']) !!}
	    </div>

	<div class="form-group">
	    	{!! Form::submit('Descargar',['class'=>'btn btn-primary']) !!}
	</div>

</form>
</div><br>


<br>
<div class="formulario">
<h4>REPORTE POR DIA Y LOCALIDAD</h4>
		<div class="form-group">
	    		{!! Form::label('Localidad:') !!}
	    		{!! Form::select('local', array('1' => 'Cd De Oaxaca',
	    									 '2' => 'Bahías de Huatulco',
	    									 '3' => 'PuertoEscondido','
	    									  4' => 'Istmo',
	    									  '5' => 'Tuxtepec',
	    									  '6' => 'Juquila',
	    									  '7' => 'Mixteca'),null,['class'=>'form-control']) !!}
	    </div>
	    <div class="form-group">
	    		{!! Form::label('Hoteles:') !!}
	    		<select name="local" id="" class="form-control">
	    		<option value='0>'>Hoteles</option>
		    		@for ($i = 1; $i <= 30; $i++)
		    			<option value='<?php echo $i ?>'>Hotel 
		    			 <?php echo $i ?>
		    			</option>
						
		    		@endfor		          
			            
		        </select>
	    	</div>

		<div class="form-group">
	    		{!! Form::label('Periodo Inicial:') !!}
	    		{!! Form::date('fecha', \Carbon\Carbon::now(),['class'=>'form-control']) !!}
	    </div>
	    <div class="form-group">
	    		{!! Form::label('Periodo Final:') !!}
	    		{!! Form::date('fecha', \Carbon\Carbon::now(),['class'=>'form-control']) !!}
	    </div>
	    <a class="btn btn-primary btn-lg active" role="button" href="{{ asset('/archivos/periodohotel.xlsx') }}" download>Descargar</a>

</div>
<br>
<div class="formulario">
<h4>REPORTE OCUPACION POR DIA Y LOCALIDAD</h4>
		<div class="form-group">
	    		{!! Form::label('Localidad:') !!}
	    		{!! Form::select('local', array('1' => 'Cd De Oaxaca',
	    									 '2' => 'Bahías de Huatulco',
	    									 '3' => 'PuertoEscondido','
	    									  4' => 'Istmo',
	    									  '5' => 'Tuxtepec',
	    									  '6' => 'Juquila',
	    									  '7' => 'Mixteca'),null,['class'=>'form-control']) !!}
	    </div>
		<div class="form-group">
	    		{!! Form::label('Fecha:') !!}
	    		{!! Form::date('fecha', \Carbon\Carbon::now(),['class'=>'form-control']) !!}
	    </div>
	    <a class="btn btn-primary btn-lg active" role="button" href="{{ asset('/archivos/diaraiahotel.xlsx') }}" download>Descargar</a>
	    

</div>
<br>
<div class="formulario">
<h4>REPORTE DETALLADO POR LOCALIDAD</h4>
		<div class="form-group">
	    		{!! Form::label('Localidad:') !!}
	    		{!! Form::select('local', array('1' => 'Cd De Oaxaca',
	    									 '2' => 'Bahías de Huatulco',
	    									 '3' => 'PuertoEscondido','
	    									  4' => 'Istmo',
	    									  '5' => 'Tuxtepec',
	    									  '6' => 'Juquila',
	    									  '7' => 'Mixteca'),null,['class'=>'form-control']) !!}
	    </div>
		<div class="form-group">
	    		{!! Form::label('Periodo Inicial:') !!}
	    		{!! Form::date('fecha', \Carbon\Carbon::now(),['class'=>'form-control']) !!}
	    </div>
	    <div class="form-group">
	    		{!! Form::label('Periodo Inicial:') !!}
	    		{!! Form::date('fecha', \Carbon\Carbon::now(),['class'=>'form-control']) !!}
	    </div>
	    <div class="form-group">
	    		{!! Form::label('Periodo Final:') !!}
	    		{!! Form::date('fecha', \Carbon\Carbon::now(),['class'=>'form-control']) !!}
	    </div>
	    <a class="btn btn-primary btn-lg active" role="button" href="{{ asset('/archivos/Rxperiodoxlocalidadxdetallado.xlsx') }}" download>Descargar</a>


</div>
<br>


<div class="formulario">
<h4>REPORTE Anual de Ocupacion por localidad </h4>
<form   method="POST" action="{{ asset('/php/reporte2.php') }}">
	<input type="hidden" name="_token" value="{{ csrf_token() }}"> 

	<div class="form-group">
	    		{!! Form::label('Localidad:') !!}
	    		{!! Form::select('local', array('1' => 'Cd De Oaxaca',
	    									 '2' => 'Bahías de Huatulco',
	    									 '3' => 'PuertoEscondido','
	    									  4' => 'Istmo',
	    									  '5' => 'Tuxtepec',
	    									  '6' => 'Juquila',
	    									  '7' => 'Mixteca'),null,['class'=>'form-control']) !!}
	    </div>
		<div class="form-group">
	    		{!! Form::label('Año 1:') !!}
	    		{!! Form::date('fecha1', \Carbon\Carbon::now(),['class'=>'form-control']) !!}
	    </div>
	    <div class="form-group">
	    		{!! Form::label('Año 2:') !!}
	    		{!! Form::date('fecha2', \Carbon\Carbon::now(),['class'=>'form-control']) !!}
	    </div>

	<div class="form-group">
	    	{!! Form::submit('Descargar',['class'=>'btn btn-primary']) !!}
	</div>

</form>
</div><br>








<div class="formulario">
		@include('alertas.success')

		@include('errors.mensaje')


		<form action="{{ url('/reporte/create') }}" method="get">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
	    	<div class="form-group">
	    		{!! Form::label('Enero:') !!}
	    		<select name="local" id="" class="form-control">
	    		<option value='0>'>Descargar Reportes</option>
		    		@for ($i = 1; $i <= 10; $i++)
		    			<option value='<?php echo $i ?>'>
		    			<a href="{{ asset('/archivos/R-1.xlsx') }}" download>Reporte enero <?php echo $i ?></a><br>
		    			</option>
						
		    		@endfor		          
			            
		        </select>
	    	</div>
	    	<input type="submit" class="btn btn-primary" value="Descargar">
		</form>
	    	


</div>


@endsection
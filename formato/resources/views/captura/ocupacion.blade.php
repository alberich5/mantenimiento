@extends('layout.plantilla')

@section('content')

<div class="formulario">
@include('alertas.success')
@include('errors.mensaje')

	{!! Form::open(['route'=>'ocupacion.create','method'=>'get']) !!}

	    	 <div class="form-group">
	    		{!! Form::label('Localidad:') !!}
	    		<select name="local" class="form-control">
					<option value="1" <?php if ($_GET['local']==1) { echo "selected"; }?>>Cd De Oaxaca</option>
					<option value="2" <?php if ($_GET['local']==2) { echo "selected"; }?>>Bahías de Huatulco</option>
					<option value="3" <?php if ($_GET['local']==3) { echo "selected"; }?>>PuertoEscondido</option>
					<option value="4" <?php if ($_GET['local']==4) { echo "selected"; }?>>Istmo</option>
					<option value="5" <?php if ($_GET['local']==5) { echo "selected"; }?>>Tuxtepec</option>
					<option value="6" <?php if ($_GET['local']==6) { echo "selected"; }?>>Juquila</option>
					<option value="7" <?php if ($_GET['local']==7) { echo "selected"; }?>>Mixteca</option>
				</select>
	    	</div>
		
	    	<div class="form-group">
	    		{!! Form::label('categoria:') !!}
	    		<select name="cate" class="form-control">
	    			<option value="1" <?php if ($_GET['cate']==1) { echo "selected"; }?>>1</option>
					<option value="2" <?php if ($_GET['cate']==2) { echo "selected"; }?>>2</option>
					<option value="3" <?php if ($_GET['cate']==3) { echo "selected"; }?>>3</option>
					<option value="4" <?php if ($_GET['cate']==4) { echo "selected"; }?>>4</option>
					<option value="5" <?php if ($_GET['cate']==5) { echo "selected"; }?>>5</option>
	    		</select>
	    	</div>
	    	



	    	<div class="form-group">
	    	{!! Form::submit('Mostrar',['class'=>'btn btn-primary']) !!}
			</div>


		{!! Form::close() !!}

		@include('partials.tablaOcupacion2')
</div>


@endsection

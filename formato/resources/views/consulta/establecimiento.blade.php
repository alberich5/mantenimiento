@extends('layout.plantilla')

@section('content')

<div class="buscador">

	{!! Form::open(['route'=>'establecimiento.index','method'=>'GET','class'=>'navbar-form navbar-left pull-right','role'=>'search']) !!}

		<div class="form-group">
	    		{!! Form::label('Localidad:') !!}
	    		<select name="local" class="form-control" onchange='submit()'>
	    			<option value="1" <?php if ($_GET['local']==1) { echo "selected"; }?>>Cd. De Oaxaca</option>
	    			<option value="2" <?php if ($_GET['local']==2) { echo "selected"; }?>>Bahías de Huatulco</option>
	    			<option value="3" <?php if ($_GET['local']==3) { echo "selected"; }?>>Puerto Escondido</option>
	    			<option value="4" <?php if ($_GET['local']==4) { echo "selected"; }?>>Istmo</option>
	    			<option value="5" <?php if ($_GET['local']==5) { echo "selected"; }?>>Tuxtepec</option>
	    			<option value="6" <?php if ($_GET['local']==6) { echo "selected"; }?>>Juquila</option>
	    			<option value="7" <?php if ($_GET['local']==7) { echo "selected"; }?>>Mixteca</option>
	    		</select>
	    </div>


	{!! Form::close() !!}
</div>

@include('partials.tablaEstablecimiento')

@endsection
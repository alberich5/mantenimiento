
@section('content')
	
<div class="formulario">
	<div id="cerrar">
		<a href="{{ url('/auth/logout') }}" >Cerrar Sesion de  {{ Auth::user()->name }}</a>
	</div>
		@include('alertas.success')
		@include('errors.mensaje')

		<form   method="POST" action="{{ asset('/php/word/templa.php') }}">

	    	
		</form>
</div>

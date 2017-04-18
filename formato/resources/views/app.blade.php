<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title> @section('Title')Formato de Almacen</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">+
	<link href="{{ asset('/css/agua.css') }}" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	
</head>
<body class="fondo">
<!--
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="{{ url('/auth/login') }}">Login</a></li>
						<li><a href="{{ url('/auth/register') }}">Register</a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/auth/logout') }}">Cerrar Sesion</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>

-->
	@yield('content')

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script src="{{ asset('/js/jquery.ripples.js') }}"></script>
    <script src="{{ asset('/js/agua.js') }}"></script>
</body>
</html>

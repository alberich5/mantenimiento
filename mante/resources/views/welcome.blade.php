<html>
	<head>
		<title>Laravel</title>
		
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #B0BEC5;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
			}

			.container {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
			}

			.content {
				text-align: center;
				display: inline-block;
			}

			.title {
				font-size: 96px;
				margin-bottom: 40px;
			}

			.quote {
				font-size: 24px;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="content">
				<!--<div class="title">Maricas</div>
				<div class="quote">{{ Inspiring::quote() }}</div>-->

				{!! Form::open(['route'=>'prueba.store', 'method'=>'POST']) !!}
  					
  					<div class="form-group">
    					{!! Form::label('Nombre:') !!}
    					{!! Form::Text('name',null,['class'=>'form-control','placeholder'=>'ingresa el nombre'])!!}
    				</div>

    				<div class="form-group">
    					{!! Form::label('Apelido1:') !!}
    					{!! Form::Text('ape1',null,['class'=>'form-control','placeholder'=>'ingresa el nombre'])!!}
    				</div>

    				<div class="form-group">
    					{!! Form::label('Apelido2:') !!}
    					{!! Form::Text('ape2',null,['class'=>'form-control','placeholder'=>'ingresa el nombre'])!!}
    				</div>
    				{!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}

				{!! Form::close() !!}



			</div>
		</div>
	</body>
</html>

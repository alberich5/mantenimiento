
<!DOCTYPE html>
<html>
<head>
	<title>Sistema de Monitoreo Diario del Estado de Oaxaca</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	{!!Html::style('css/style.css')!!}


</head>
<body>

				<div class="login-form">
					<div class="head">
						<img src="images/logito.png" alt=""/>	
				</div>

				<form role="form" method="POST" action="{{ url('/auth/login') }}">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<li>
						<input type="text" class="text" value="USERNAME" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'USERNAME';}" ><a href="#" class=" icon user"></a>
					</li>
					<li>
						<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}"><a href="#" class=" icon lock"></a>
					</li>
					<div class="p-container">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked><i></i>Recordar</label>
								<input type="submit"  value="ENTRAR" >
							<div class="clear"> </div>
					</div>
				</form>
			</div>

		 		
</body>
</html>
@extends('app')

@section('content')
<br><br>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-primary" id="tamanopanel">
				<div class="panel-heading" id="tamanosesion" >Entrar y Descargar Formato</div>
					<div class="panel-body" id="colorpanel">
						@if (count($errors) > 0)
							<div class="alert alert-danger text-center">
								La contraseña o usuario no coiciden vuelve a Intentarlo.
							</div>
						@endif

						<div class="login-form">
							<div class="head">
								<img src="{{ asset('/images/logito.png') }}" alt=""/>	
							</div>

							<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">

								<div class="form-group">
									<label class="col-md-4 control-label">E-Mail</label>
									<div class="col-md-6">
										<input type="email" class="form-control" name="email" value="invitado@pabic.com" placeholder="invitado@pabic.com" >
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label">Password</label>
									<div class="col-md-6">
										<input type="password" class="form-control" name="password" placeholder="Ingresa Admin" value="12345678">
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-6 col-md-offset-4">
										<div class="checkbox">
											<label>
												
											</label>
										</div>
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-6 col-md-offset-4">
										<button type="submit" class="btn btn-primary">Entrar</button>

									</div>
								</div>
							</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

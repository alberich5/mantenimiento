@extends('app')
@section('css')
    <link href="{{ asset('/css/dropzone.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="formulario">
	<div class="main-contact">
					 
					 <div class="contact-form">
						 {!!Form::open(['route'=>'mail.store','method'=>'POST'])!!}
						 	<div class="col-md-6 contact-left">
						 		{!!Form::text('name',null,['placeholder' => 'Nombre'])!!}
						 		{!!Form::text('email',null,['placeholder' => 'Email'])!!}
							</div>
							<div class="col-md-6 contact-right">
								{!!Form::textarea('mensaje',null,['placeholder' => 'Mensaje'])!!}
							</div>
							{!!Form::submit('SEND')!!}
						 {!!Form::close()!!}
					</div>
				</div>
</div>
@endsection
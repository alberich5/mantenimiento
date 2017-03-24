<?php $message=Session::get('message') ?>

@if($message == 'store')
	<div class="alert alert-success" role="alert">Se Guardo exitosamente</div>
@endif


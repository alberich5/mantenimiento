
		@if($errors->any())
			<div class="alert alert-danger" role="alert">
				<p>Nesecito que todos los campos esten llenos</p>
				<ul>
				@foreach($errors->all() as $error)
					<!--<li>{{ $error }}</li>-->
				@endforeach
				</ul>
			</div>
		@endif
	
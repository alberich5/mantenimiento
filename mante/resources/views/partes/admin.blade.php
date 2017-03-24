@section('content')
	
<div class="formulario5">
	<div id="cerrar">
		<span class="label label-info"><a id="liga" href="{{ url('/auth/logout') }}" >Cerrar Sesion de  {{ Auth::user()->name }}</a></span><br>
	</div>
		@include('alertas.success')
		@include('errors.mensaje')

		
	<div class="form-group">
	<center><h2>NO ATENDIDOS</h2></center>
	<?php 

	$id = 4;
	$conn = mysqli_connect('localhost','root','','mante');
	$sql = "SELECT * FROM mantenimientos WHERE status=0";
	$result = mysqli_query($conn,$sql);
	echo "
		<table class='table'>
			    <thead>
			        <tr>
			            <th>Folio</th>
			            <th>Nombre</th>
			            <th>Telefono</th>
			            <th>Tipo</th>
			            <th>Probremas</th>
			            <th>Descargar</th>
			            <th>Status</th>
			        </tr>
			    </thead>
			    <tbody>";
	while($row = mysqli_fetch_array($result)){
		echo "
			<tr>
				<td>".$row[0]."</td>
				<td>".$row[1]."</td>
				<td>".$row[2]."</td>
				<td>".$row[9]."</td>
				<td>".$row[10]."</td>
				<td><a href='php/word/mante/$row[0].docx'>bajar</a></td>
				<td><a href='php/actualizarstatus.php?x=$row[0]'>atendido</a></td>
			</tr>";
	}
	echo "</tbody></table>";



	 ?>
	</div>



<br><br>
	<div class="form-group">
	<center><h2>ATENDIDOS</h2></center>
	<?php 

	$id = 4;
	$conn = mysqli_connect('localhost','root','','mante');
	$sql = "SELECT * FROM mantenimientos WHERE status=1";
	$result = mysqli_query($conn,$sql);
	echo "
		<table class='table'>
			    <thead>
			        <tr>
			            <th>Folio</th>
			            <th>Nombre</th>
			            <th>Telefono</th>
			            <th>Tipo</th>
			            <th>Probremas</th>
			            <th>Email</th>
			            
			        </tr>
			    </thead>
			    <tbody>";
	while($row = mysqli_fetch_array($result)){
		echo "
			<tr>
				<td>".$row[0]."</td>
				<td>".$row[1]."</td>
				<td>".$row[2]."</td>
				<td>".$row[9]."</td>
				<td>".$row[10]."</td>
				<td>".$row[3]."</td>
				
				
			</tr>";
	}
	echo "</tbody></table>";



	 ?>
	</div>

</div>

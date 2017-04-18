@section('content')
	
<div class="formulario5">
	<div id="cerrar">
		<span class="label label-info"><a id="liga" href="{{ url('/auth/logout') }}" >Cerrar Sesion de  {{ Auth::user()->name }}</a></span><br>
	</div>
		@include('alertas.success')
		@include('errors.mensaje')

		
	<div class="form-group">
	<center><h2>Historial</h2></center>
	<?php 

	$id = 4;
	$conn = mysqli_connect('localhost','root','','orden_salida');
	$sql = "SELECT * FROM orden";
	$result = mysqli_query($conn,$sql);
	echo "
		<table class='table'>
			    <thead>
			        <tr>
			            <th>No.Pedido</th>
			            <th>Folio</th>
			            <th>Recurso</th>
			            <th>Clave</th>
			            <th>Proveedor</th>
			            <th>Area</th>
			            <th>Unidad</th>
			            <th>cantidad</th>
			            <th>Atendio</th>
			            <th>Fecha</th>

			        </tr>
			    </thead>
			    <tbody>";
	while($row = mysqli_fetch_array($result)){
		echo "
			<tr>
				<td>".$row[1]."</td>
				<td>".$row[2]."</td>
				<td>".$row[3]."</td>
				<td>".$row[4]."</td>
				<td>".$row[5]."</td>
				<td>".$row[6]."</td>
				<td>".$row[7]."</td>
				<td>".$row[8]."</td>
				<td>".$row[11]."</td>
				<td>".$row[12]."</td>
			</tr>";
	}
	echo "</tbody></table>";



	 ?>
	</div>




	

</div>

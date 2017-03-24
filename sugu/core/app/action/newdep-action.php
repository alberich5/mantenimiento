<?php
$department=$_POST['department'];
$mysqli=mysqli_connect(HOST,USER,PASS,TABL);
mysqli_set_charset( $mysqli, 'utf8');
$mysqli->query("insert into departments (name) values ('$department')");
if ($mysqli) {
	echo'<script>alert("Departamento registrado correctamente.");window.location="?view=deps";</script>';
}else{
	echo'ERROR';
}
?>
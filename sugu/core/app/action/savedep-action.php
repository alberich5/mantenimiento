<?php
$id=$_GET['code'];
$name=$_POST['department'];
$mysqli=mysqli_connect(HOST,USER,PASS,TABL);
mysqli_set_charset( $mysqli, 'utf8');
if ($mysqli->query("update departments set name='$name' where id='$id'")) {
	echo mysqli_error($mysqli);
	echo'<script>alert("Departamento actualizado correctamente.");window.location="?view=deps";</script>';
}else{
	echo'ERROR';
}
?>
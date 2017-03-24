<?php
$name=$_POST['fullname'];
$telephone=$_POST['phone'];
$direction=$_POST['address'];
$type=$_POST['kind'];
$department=$_POST['team_id'];
$message=$_POST['msg'];
$mysqli=mysqli_connect(HOST,USER,PASS,TABL);
mysqli_set_charset( $mysqli, 'utf8');
$mysqli->query("insert into suggestions (name,telephone,direction,type,department,message,tipo) values ('$name','$telephone','$direction','$type','$department','$message','general')");
if ($mysqli) {
	echo'<script>alert("Sugerencia enviada correctamenta, MUCHAS GRACIAS.");window.location="./";</script>';
}else{
	echo'ERROR';
}
?>
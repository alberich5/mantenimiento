<?php
$user=$_POST['user'];
$password=$_POST['password'];
$password=sha1(md5($password));
$mysqli=mysqli_connect(HOST,USER,PASS,TABL);
mysqli_set_charset( $mysqli, 'utf8');
$mysqli->real_query("select * from user where username='$user' and password='$password'");
$query = $mysqli->store_result();
$n_rows = $query->num_rows;
if ($n_rows=='1') {
	while ($row = $query->fetch_assoc()){
		if ($row['is_active']=='1' and $row['is_recover']=='0') {
			$_SESSION['user_mail']=$row['email'];
			$_SESSION['user_username']=$row['username'];
			$_SESSION['user_id']=$row['id'];
			$_SESSION['is_admin']=$row['is_admin'];
			echo'<script>alert("Bienvenido ha iniciado sesión correctamente.");window.location="?view=home";</script>';
		}else{
			echo'<script>alert("El usuario no esta activado o esta en modo recuperación.");window.location="./";</script>';
		}
	}
}else{
	echo'<script>alert("No se ha podido iniciar sesión, intentelo de nuevo.");window.location="?view=login";</script>';
}
?>
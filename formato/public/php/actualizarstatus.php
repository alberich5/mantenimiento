<?php 

$id=$_GET['x'];

$conn = mysqli_connect('localhost','root','','mante');
$sql = "UPDATE mantenimientos SET status=1 WHERE id = '".$id."'";
$result = mysqli_query($conn,$sql);


header('Location: /mante/public/noe');
?>
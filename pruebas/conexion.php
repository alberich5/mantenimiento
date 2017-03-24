<?php 


$id = 10;
$conn = mysqli_connect('localhost','root','','mante');
$sql = "UPDATE mantenimientos SET status=1 WHERE id = '".$id."'";
$result = mysqli_query($conn,$sql);

 ?>
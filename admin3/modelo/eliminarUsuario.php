<?php 
	include("../contolador/conexion.php");
	$id=$_POST['id'];

	$sql="DELETE FROM usuario WHERE User_id='$id'";
	echo $result=mysqli_query($conexion,$sql);
 ?>
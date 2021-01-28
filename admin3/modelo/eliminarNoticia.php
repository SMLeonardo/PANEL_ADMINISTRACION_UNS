<?php 
	include("../contolador/conexion.php");
	$id=$_POST['idn'];

	$sql="DELETE FROM noticias WHERE NT_id='$id'";
	echo $result=mysqli_query($conexion,$sql);
 ?>
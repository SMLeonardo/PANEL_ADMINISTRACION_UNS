<?php
include("../contolador/conexion.php");
$id=$_POST['ID'];
	$descripcion1=$_POST['descripcion1'];
	

	$sql="UPDATE secciones set SEC_descripcion='$descripcion1'
				where SEC_id='$id'";
	echo $result=mysqli_query($conexion,$sql);
    
?>
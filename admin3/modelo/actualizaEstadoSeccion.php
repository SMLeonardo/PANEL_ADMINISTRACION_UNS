<?php
include("../contolador/conexion.php");
$id=$_POST['id'];	
$e=$_POST['estado'];
	$sql="UPDATE secciones set SEC_estado='$e'
				where SEC_id='$id'";
	echo $result=mysqli_query($conexion,$sql);
    
?>
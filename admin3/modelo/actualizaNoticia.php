<?php
include("../contolador/conexion.php");
$id=$_POST['ID'];
	$descripcion1=$_POST['descripcion1'];
	

	$sql="UPDATE noticias set NT_descripcion='$descripcion1'
				where NT_id='$id'";
	echo $result=mysqli_query($conexion,$sql);
    
?>
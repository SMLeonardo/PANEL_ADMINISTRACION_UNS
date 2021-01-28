<?php
include("../contolador/conexion.php");
$id=$_POST['id'];	
$e=$_POST['estado'];
	$sql="UPDATE noticias set NT_estado='$e'
				where NT_id='$id'";
	echo $result=mysqli_query($conexion,$sql);
    
?>
<?php 

	include("../contolador/conexion.php");
	
	$seccion=$_POST['descripcion'];
	
	

	$SQL="INSERT INTO secciones (SEC_descripcion,SEC_estado)
								VALUES ('$seccion','1')";
	$result = mysqli_query($conexion, $SQL);
	if($result==1){
            
            header("location:../Secciones.php");
        }else{
            echo "Ha fallado la subida, reintente nuevamente.";
        }

 ?>
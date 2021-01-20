<?php
include("contolador/conexion.php");
$id=$_POST['ID'];
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$email=$_POST['email'];
	$user=$_POST['usuario'];
	$pass=$_POST['contraseña'];

	$sql="UPDATE usuario set User_nombres='$nombre',
								User_apellidos='$apellido',
								User_email='$email',
								User_usuario='$user',
								User_password='$pass' 
				where User_id='$id'";
	echo $result=mysqli_query($conexion,$sql);

?>
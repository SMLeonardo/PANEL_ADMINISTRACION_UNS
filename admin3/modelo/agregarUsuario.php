<?php 

	include("../contolador/conexion.php");
	
	$nombre=$_POST['nombre'];
	$apellidos=$_POST['apellidos'];
	$email=$_POST['email'];
	$usuario=$_POST['usuario'];
	$pass=$_POST['pass'];

	$sql="INSERT INTO usuario (User_nombres,User_apellidos,User_usuario,User_password,User_email)
								VALUES ('$nombre','$apellidos','$usuario','$pass','$email')";
	echo $result=mysqli_query($conexion,$sql);

 ?>
<?php
include("conexion.php");
$nombres=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$email=$_POST['email'];
$usuario=$_POST['usuario'];
$password=$_POST['pass'];
$solicitud="INSERT INTO usuario (User_nombres,User_apellidos,User_usuario,User_password,User_email) VALUES('$nombres','$apellidos','$usuario','$password','$email')";
$resultado=mysqli_query($conexion,$solicitud);

if ($resultado==1) {
	echo "REGISTRO CREADO CON EXITO";
}else{
	header('location:../plogin.php');
}

?>
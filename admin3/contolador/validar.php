
<?php
include("conexion.php");
$id=$_POST['usuario'];
$id=$_POST['contraseña'];
$solicitud="SELECT User_usuario,User_password,User_email FROM usuario";
$resultado=mysqli_query($conexion,$solicitud);

while ($fila = mysqli_fetch_array($resultado)) {
	
	
	if ($_POST['usuario']==$fila['User_usuario'] && $_POST['contraseña']==$fila['User_password']|| $_POST['usuario']==$fila['User_email'] && $_POST['contraseña']==$fila['User_password'] ) {
	echo "DATOS CORRECTOS";
	session_start();
	
	header('location:../paginas.html');
}else{
/*echo "ERROR";
echo "<a href='../plogin.php'> Intetntar Nuevamente </a>"; */
echo "error o datos incorrectos";
//header('location:../plogin.php');

}
}


?>
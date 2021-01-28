<?php 
	include("contolador/conexion.php");
	$id=$_POST['id'];

    $sql="DELETE FROM vinculos WHERE id_vinculos='$id'";
  
    echo $result=mysqli_query($conexion,$sql);
   // header('location:../admin3/Vinculos.php');
 ?>
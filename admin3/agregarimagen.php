<?php

include "contolador/conexion.php";

$descripcion=$_REQUEST['descripcion'];
$nombreimg=$_FILES['imagen']['name'];
$archivo=$_FILES['imagen']['tmp_name'];
$ruta="fotos";
$ruta=$ruta."/".$nombreimg;

move_uploaded_file($archivo,$ruta);
$consulta="insert into vinculos(descripcion,ruta_imagen,estado) values('".$descripcion."','".$ruta."',1)";
$query=mysqli_query($conexion,$consulta);
if($query){
    header('location:../admin3/Vinculos.php');
}else{
    echo"Error";
}
?>
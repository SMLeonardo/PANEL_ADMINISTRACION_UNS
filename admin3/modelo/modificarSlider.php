<?php
include("../contolador/conexion.php");
/*
        Comprovamos que se aya pasado un parametro: isset($_FILES['miArchivo'])
        Comprovamos que el parametro no esta vacio isset($_FILES['miArchivo'] !='')
    */
    if((isset($_FILES['imagen'])) && ($_FILES['imagen'] !='')){
       
        $descripcion=$_REQUEST['descripcion'];
        $nombreimg=$_FILES['imagen']['name'];
        $archivo=$_FILES['imagen']['tmp_name'];
        $ruta="../fotos";
        $ruta=$ruta."/".$nombreimg;
        $id=$_REQUEST['ID'];

        move_uploaded_file($archivo,$ruta);

        $ruta="fotos";
        $ruta=$ruta."/".$nombreimg;

        $sql="UPDATE sliders set descripcion='$descripcion',ruta_imagen='$ruta'
        where id_slider='$id'";
        $query=mysqli_query($conexion,$sql);
        if($query){
        header('location:../Slider.php');
        }else{
        echo"Error";
        }
      
    }else{
        $descripcion=$_REQUEST['descripcion'];
        $id=$_REQUEST['ID'];
        $ruta_imagen=$_REQUEST['ruta'];

        $sql="UPDATE sliders set descripcion='$descripcion'
				where id_slider='$id'";
$query=mysqli_query($conexion,$sql);
if($query){
    header('location:../Slider.php');
}else{
    echo"Error";
}
    }

 ?>
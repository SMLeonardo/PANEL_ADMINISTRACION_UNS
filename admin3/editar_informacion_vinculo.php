<?php
include("contolador/conexion.php");
/*
        Comprovamos que se aya pasado un parametro: isset($_FILES['miArchivo'])
        Comprovamos que el parametro no esta vacio isset($_FILES['miArchivo'] !='')
    */
    if((($_FILES['imagen']['name'])!='')){
       
        $descripcion=$_REQUEST['descripcion'];
        $nombreimg=$_FILES['imagen']['name'];
        $archivo=$_FILES['imagen']['tmp_name'];
        $ruta="fotos";
        $ruta=$ruta."/".$nombreimg;
        $id=$_REQUEST['ID'];

        move_uploaded_file($archivo,$ruta);

        $consulta="UPDATE vinculos set descripcion='$descripcion',ruta_imagen='$ruta'
        where id_vinculos='$id'";
$query=mysqli_query($conexion,$consulta);
    if($query){
        header('location:../admin3/Vinculos.php');
        }else{
        echo"Error";
        }
      
    }else{
        $descripcion=$_REQUEST['descripcion'];
        $id=$_REQUEST['ID'];
        $ruta_imagen=$_REQUEST['ruta'];

        $sql="UPDATE vinculos set descripcion='$descripcion'
				where id_vinculos='$id'";
        $query=mysqli_query($conexion,$sql);
        if($query){
        header('location:../admin3/Vinculos.php');
    }else{
        echo"Error";
    }
    }

 ?>
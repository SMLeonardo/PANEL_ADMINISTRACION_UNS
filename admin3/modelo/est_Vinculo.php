<?php
include("../contolador/conexion.php");
/*
        Comprovamos que se aya pasado un parametro: isset($_FILES['miArchivo'])
        Comprovamos que el parametro no esta vacio isset($_FILES['miArchivo'] !='')
    */
    
       
        $estado=$_REQUEST['estado'];
        $cambio=1;
        if ($estado==1) {
            $cambio=2;
        } else {$cambio=1; }

        $id=$_REQUEST['ID'];
          
        $sql="UPDATE vinculos set estado='$cambio'
        where id_vinculos='$id'";
        $query=mysqli_query($conexion,$sql);
        if($query){
        header('location:../Vinculos.php');
        
        }else{
        echo"Error";
        }
       
    

 ?>
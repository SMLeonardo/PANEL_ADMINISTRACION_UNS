

<?php
include("../contolador/conexion.php");
/*
        Comprovamos que se aya pasado un parametro: isset($_FILES['miArchivo'])
        Comprovamos que el parametro no esta vacio isset($_FILES['miArchivo'] !='')
    */
    if((isset($_FILES['image'])) && ($_FILES['image'] !='')){
        $file = $_FILES['image']; //Asignamos el contenido del parametro a una variable para su mejor manejo
        
        $temName = $file['tmp_name']; //Obtenemos el directorio temporal en donde se ha almacenado el archivo;
        $fileName = $file['name']; //Obtenemos el nombre del archivo
        $fileExtension = substr(strrchr($fileName, '.'), 1); //Obtenemos la extensión del archivo.
        
        //Comenzamos a extraer la información del archivo
        $fp = fopen($temName, "rb");//abrimos el archivo con permiso de lectura
        $contenido = fread($fp, filesize($temName));//leemos el contenido del archivo
        //Una vez leido el archivo se obtiene un string con caracteres especiales.
        $contenido = addslashes($contenido);//se escapan los caracteres especiales
        fclose($fp);//Cerramos el archivo
        $descripcion=$_POST['descripcion'];
        //Insertando los datos
        //Creando el query
        $query = "INSERT INTO noticias (NT_descripcion,NT_imagen,NT_extension,NT_estado ) VALUES ('$descripcion' ,'$contenido' ,'$fileExtension','1')";
        //Ejecutando el Query
        $result = mysqli_query($conexion, $query);
        
      if($result==1){
            echo "Archivo Subido Correctamente.";
            echo "<script type='text/javascript'>
                      alert('guardado')
                      </script>";
            header("location:../Noticias.php");
        }else{
            echo "Ha fallado la subida, reintente nuevamente.";
        } 
    }

 ?>
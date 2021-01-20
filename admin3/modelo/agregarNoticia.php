

<?php
include("../contolador/conexion.php");
if(isset($_POST["submit"])){
    $revisar = getimagesize($_FILES["image"]["tmp_name"]);
    if($revisar !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContenido = addslashes(file_get_contents($image));
        $descripcion=$_POST['descripcion'];
        //Insertar imagen en la base de datos
       	$sql="INSERT INTO noticias (NT_descripcion,NT_imagen)
								VALUES ('$descripcion','$imgContenido')";;
        // COndicional para verificar la subida del fichero
	$result=mysqli_query($conexion,$sql);

        if($result==1){
            echo "Archivo Subido Correctamente.";
            header("location:../Noticias.php");
        }else{
            echo "Ha fallado la subida, reintente nuevamente.";
        } 
        // Sie el usuario no selecciona ninguna imagen
    }else{
        echo "Por favor seleccione imagen a subir.";
    }
}
?>
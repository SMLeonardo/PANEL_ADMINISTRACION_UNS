
<?php
// SL_id	SL_imagen	SL_Fcreacion	SL_estado	SL_detalle

include("../contolador/conexion.php");

if(isset($_POST["submit"])){
    $revisar = getimagesize($_FILES["image"]["tmp_name"]);
    if($revisar !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContenido = addslashes(file_get_contents($image));
        $descripcion=$_POST['descripcion'];
        //Insertar imagen en la base de datos
       	$sql="INSERT INTO sliders (SL_imagen,SL_detalle)
           )
								VALUES ('$imgContenido','$descripcion')";;
        // COndicional para verificar la subida del fichero
	$result=mysqli_query($conexion,$sql);

        if($result==1){
            echo "Archivo Subido Correctamente.";
            header("location:../Slider.php");
        }else{
            echo "Ha fallado la subida, reintente nuevamente.";
        } 
        // Sie el usuario no selecciona ninguna imagen
    }else{
        echo "Por favor seleccione imagen a subir.";
    }
}
?>

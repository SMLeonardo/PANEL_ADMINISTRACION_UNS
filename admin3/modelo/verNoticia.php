<?php
include("../contolador/conexion.php"); //importamos el archivo de conexiÃ³n
//Funcion para recuperar el mime
function fObtenerMime($wfParamCadena){//creamos una funciÃ³n que recibira un parametro en este caso la extensiÃ³n del archivo
    $fsExtension = $wfParamCadena;  
    if  ($fsExtension =='bmp'){ $mime = 'image/bmp'; }
    if  ($fsExtension =='gif' ){ $mime ='image/gif' ; }
    if  ($fsExtension =='jpe' ){ $mime ='image/jpeg' ; }
    if  ($fsExtension =='jpeg'){ $mime = 'image/jpeg' ; }
    if  ($fsExtension =='jpg' ){ $mime ='image/jpeg'; }
    if  ($fsExtension =='png' ){ $mime = 'image/png'; }    
    return $mime;//en base a su extenxiÃ³n la function retornara un tipo de mime 
}
 
 
    $idImagen = $_GET['id']; //Recuperamos el prametro que contiene el id de la imagen que vamos a consultar.
    
    $result = mysqli_query($conexion,"Select * from noticias where NT_id = $idImagen");//Realizamos una consulta a la imagen seleccionada
    $imagen =  mysqli_fetch_assoc($result);//recuperamos los registros de la consulta
    $mime = fObtenerMime($imagen['NT_extension']);//Obtenemos el mime del archivo.
    $contenido = $imagen['NT_imagen'];//Obtenemos el contenido almacenado en el campo Binario.
    
    header("Content-type:$mime");//le indicamos al navegador que tipo de informaciÃ³n mostraremos.
    print $contenido; //Imprimimos el contenido.
    ?>
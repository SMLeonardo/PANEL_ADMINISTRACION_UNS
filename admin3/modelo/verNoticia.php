 <?php
if(!empty($_GET['NT_id'])){
    //Credenciales de conexion
    $Host = 'localhost:3307';
        $Username = 'root';
        $Password = '';
        $dbName = 'web';
    
    //Crear conexion mysql
    $db = new mysqli($Host, $Username, $Password, $dbName);
    
    //revisar conexion
    if($db->connect_error){
       die("Connection failed: " . $db->connect_error);
    }
$solicitud=$db->query("SELECT NT_imagen FROM noticias WHERE NT_id = {$_GET['NT_id']}");
    
    if($solicitud->num_rows > 0){
        $imgDatos = $solicitud->fetch_assoc();
        
        //Mostrar Imagen
        header("Content-type: image/jpg"); 
        echo $imgDatos['NT_imagen']; 
    }else{
        echo 'Imagen no existe...';
    }
}
              ?>
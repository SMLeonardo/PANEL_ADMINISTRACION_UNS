<?php
function conexion($tabla, $usuario, $pass)
try {
    //code...
    $conexion = new PDO("mysql:host=localhost;dbname=$tabla", $usuario, $pass);
    return $conexion;
} catch (PDOException $e) {
    //throw $th;
    return false;
}

?>
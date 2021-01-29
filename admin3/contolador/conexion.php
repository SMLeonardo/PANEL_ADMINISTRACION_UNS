<?php
$host="127.0.0.1:3307";
$user="root";
$pass="";
$db="web";
$conexion=mysqli_connect($host,$user,$pass,$db);
mysqli_set_charset($conexion,"utf8_spanish_ci");
?>
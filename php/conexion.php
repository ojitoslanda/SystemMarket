<?php
$servidor = "localhost";
$database = "db_minimarket";
$usuario = "root";
$contrasenia = "";
#Instanciar un objeto
$conexion = new mysqli($servidor, $usuario, $contrasenia, $database);
if($conexion->connect_error){
    echo "CONEXION MALA";
    echo $conexion->connect_error; 
}else{
    //echo "CONEXION EXITOSA";
}
?>
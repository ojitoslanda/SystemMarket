<?php //Inicio
require '../conexion.php';
$nombre = $_POST['nom'];
$correo = $_POST['correo'];
$pass =  $_POST['pass'];
$rol = $_POST['rol'];
$sql = "INSERT INTO usuarios(nombre,correo,pass,roles)
        values('$nombre','$correo','$pass','$rol')";
$resultado = $conexion->query($sql);  
if($resultado){
    header("Location: ../../dash_usuario_registro.php");
}  else{
    header("Location: ../../dash_usuario_registro.php");
} 
//Cierre ?> 

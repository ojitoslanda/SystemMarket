<?php
require '../conexion.php';
$nombre  = $_POST['nom'];
$correo = $_POST['email'];
$clave = $_POST['clave'];
$roles = $_POST['rol'];
$iduser =$_POST['iduser'];

$sql = "UPDATE usuarios 
        SET nombre = '$nombre',
            correo = '$correo',
            pass = '$clave',
            roles = '$roles'
        WHERE id_usuario = '$iduser'
        ";
$resultado = $conexion->query($sql);  
if($resultado){
    header("Location: ../../dash_usuario_reporte.php");
}  else{
    header("Location: ../../dash_usuario_reporte.php");
} 
?>
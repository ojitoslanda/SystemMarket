<?php
require 'conexion.php';
$userCorreo=trim($_POST['ucorreo']);
$userPass=trim($_POST['upass']);
$consulta_sql  = "SELECT * FROM usuarios";
$resultado = $conexion->query($consulta_sql);
while($row = $resultado->fetch_array(MYSQLI_ASSOC)){
    print_r($row);
}
?>
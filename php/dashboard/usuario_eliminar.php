<?php //Inicio
require '../conexion.php';
header('Content-Type: application/json');
$test=json_decode(file_get_contents("php://input"));
$var_iduser = json_encode($test->seleccion->id_u);
$sql = "DELETE FROM usuarios WHERE id_usuario=$var_iduser";
$resultado = $conexion->query($sql); 
echo json_encode($test->seleccion->id_u);
?>
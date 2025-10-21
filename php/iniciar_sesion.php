<?php
require 'conexion.php';
$encontrado = 0;
$userCorreo=trim($_POST['ucorreo']);
$userPass=trim($_POST['upass']);
$consulta_sql  = "SELECT * FROM usuarios";
$resultado = $conexion->query($consulta_sql);
while($row = $resultado->fetch_array(MYSQLI_ASSOC)){
    // print_r($row);
    if($row['correo'] == $userCorreo){
        if($row['pass'] == $userPass){
            session_start();
            $_SESSION['user_sesion'] = $row;
            $encontrado = 1;
            echo "Usuario Existe, ¡Bienvenido!";
        }else{ 
            $encontrado = 0;
            echo "Contraseña incorrecta"; 
        }
    }else{
         $encontrado = 0;
        echo "Correo Incorrecta";
    }
} 

if($encontrado==1){
    header("Location: ../index.php");
}else{
    header("Location: ../index.php?error=user");
}




?>
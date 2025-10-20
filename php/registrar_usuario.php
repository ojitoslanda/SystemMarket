<?php
    require 'conexion.php';
    #Almacenamos en una variable
    #Post es del FORM - 'name'
    $nom_com = trim($_POST['nom_comp']);
    $correo = trim($_POST['correo']);
    $pass = trim($_POST['pass']);
    $sql_save="INSERT INTO usuarios(nombre,correo,pass)
               values('$nom_com','$correo','$pass');";
    $resultado = $conexion->query($sql_save);  
    if($resultado){
        header('Location: ../index.php');
    }else{
        echo "NO SE GUARDO LOS DATOS";
    }

?>
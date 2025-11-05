<?php //inicio
session_start();
require '../conexion.php';
$cat_pro = $_POST['ctp'];
$nomp = $_POST['nombreP'];
$precio = $_POST['precio'];
$img = $_FILES['img_url'];
$stock = $_POST['stock'];
$estado = $_POST['estado'];
$id_user = $_SESSION['user_sesion']['id_usuario'];

//Subir imagen en la carpeta local
$extension = pathinfo($img['name'], PATHINFO_EXTENSION);
$nombre_unico = uniqid(). '.'.$extension;
$ruta = '../../recursos/'.$nombre_unico;
move_uploaded_file($img['tmp_name'],$ruta);

//Insertar en la base de datos
$sql = "INSERT INTO 
        productos(id_categoria,
                  nombre_producto,
                  precio,
                  imagen_url,
                  stock,
                  estado,
                  codigo_qr,
                  id_usuario)
        VALUES('$cat_pro',
               '$nomp',
               '$precio',
               '$nombre_unico',
               '$stock',
               '$estado',
               '$nombre_unico',
               '$id_user')";
$resultado = $conexion->query($sql);  
 header("Location: ../../dash_usuario_reporte.php");
mysqli_close($conexion);
//cierre ?> 
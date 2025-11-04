<?php //inicio
require '../conexion.php'
session_start();
$cat_pro = $_POST['ctp'];
$nomp = $_POST['nombreP'];
$precio = $_POST['precio'];
$img = $_FILES['img_url'];
$stock = $_POST['stock'];
$estado = $_POST['estado'];
$id_user = $_SESSION['user_sesion']['id_usuario'];


//cierre ?> 
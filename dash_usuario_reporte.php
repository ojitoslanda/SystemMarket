<?php
require('php/conexion.php');
session_start();
if(isset($_SESSION['user_sesion'])){
  $nombre_user = $_SESSION['user_sesion']['nombre'];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Principal</title>
    <link rel="shortcut icon" href="assets/images/logo/logo.ico" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="assets/dashboard/style.css">
    <link rel="stylesheet" 
          href="assets/dashboard/drp_table.css">
</head>

<body>
    <button class="menu-toggle" onclick="toggleSidebar()">
        <i class="fa-solid fa-bars"></i>
    </button>
    <!-- MENU LATERAL -->
    <?php  include 'includes/menu.php';  ?>
    <!-- CONTENIDO PRINCIPAL -->
    <div class="content" id="content">
        <h1>Productos | Reportes</h1>
            <div id="content-area" class="card">
                <table>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Correo Electronico</th>
                    <th>Contraseña</th>
                    <th>Rol</th>
                    <th>Opciones</th>
                </tr>
                <?php 
                $sql="SELECT * FROM usuarios";
                $resultado = mysqli_query($conexion,$sql);
                while($dato = mysqli_fetch_array($resultado,MYSQLI_ASSOC)){  
                    echo "<tr>";
                      echo "<td>".$dato['id_usuario']."</td>";      
                      echo "<td>".$dato['nombre']."</td>";      
                      echo "<td>".$dato['correo']."</td>";      
                      echo "<td>".$dato['pass']."</td>";      
                      echo "<td>".$dato['roles']."</td>";
                      echo "<td>
                                <button type='button' id='btnEditar' class='boton edit'>Editar</button>
                                <button type='button' id='btnEliminar' class='boton delete'>Eliminar</button>
                            </td>";      
                    echo "</tr>";
                    //print_r($dato);
                }
                ?>
            </table>
        </div>
    </div>

    <script src="assets/dashboard/main.js"></script>
    <script src="assets/dashboard/ajax.js"></script>
</body>

</html>
<?php
require 'php/conexion.php';
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

</head>

<body>
    <button class="menu-toggle" onclick="toggleSidebar()">
        <i class="fa-solid fa-bars"></i>
    </button>
    <!-- MENU LATERAL -->
    <?php  include 'includes/menu.php';  ?>
    <!-- CONTENIDO PRINCIPAL -->
    <div class="content" id="content">
        <h1>Registro Producto | Principal</h1>
        <div id="content-area" class="card">
            <form action="php/dashboard/producto_registro.php" method="POST">
                <div>
                    <label for="idcate">Categoria del Producto:</label>
                    <?php 
                        $sql = "SELECT * FROM categorias_productos;";
                        $resultado = mysqli_query($conexion,$sql);
                        echo "<select name='ctp' id='idcate'>";
                        while($dato = mysqli_fetch_array($resultado,MYSQLI_ASSOC)){ 
                          ?>
                             <option value="<?php echo $dato['id_categoria'] ?>"> 
                                <?php echo $dato['seccion'] ?>
                             </option>
                          <?php
                        }
                        echo "</select>";
                    ?>
                </div>
                <div>
                    <label for="np">Nombre del producto :</label>
                    <input type="text" name="nombreP" id="np" 
                           placeholder="Escribe el nombre del producto">
                </div>
                <div>
                    <label for="pr">Precio :</label>
                    <input type="number" name="precio"  id="pr" 
                           placeholder="Escribe el precio del producto">
                </div>
                <div>
                    <label for="imagen_url">Imagen</label>
                    <input id="imgFile" name="img_url" type="file" accept="image/*">
                    <img id="visual" 
                        src="" 
                        alt="Imagen representativa" 
                        style="width:100px;">
                </div>
                 <div>
                    <label for="stock">Stock</label>
                    <input type="number" name="stock" value="0" id="stock" min="0" max="99" maxlength="3">
                </div>
                <div>
                    <label for="status">Estado</label>
                    <select name="estado" id="status"> 
                        <option value="activo">Activo</option>
                        <option value="inactivo">Inactivo</option>
                        <option value="No disponible">No disponible</option>
                    </select>
                </div>
                <div> <button type="submit">Registrar</button> </div>
            </form>
        </div>
    </div>

    <script src="assets/dashboard/main.js"></script>
    <script src="assets/dashboard/imagen.js"></script>
</body>

</html>

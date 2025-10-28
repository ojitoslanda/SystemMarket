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
                    <select name="ctp" id="idcate">
                        <option value="">Seleccione una categoria</option>
                    </select>
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
                     <label for="roles">Roles :</label>
                     <select name="rol" id="roles">
                        <option>Seleccione un rol</option>
                        <option value="cliente">Cliente</option>
                        <option value="cajero">Cajero</option>
                        <option value="admin">Administrador</option>
                     </select>
                </div>
                <div> <button type="submit">Registrar</button> </div>
            </form>
        </div>
    </div>

    <script src="assets/dashboard/main.js"></script>
</body>

</html>

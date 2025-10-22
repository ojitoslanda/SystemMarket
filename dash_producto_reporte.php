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
                    <th>Categoria</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Imagen</th>
                    <th>Stock</th>
                    <th>Estado</th>
                    <th>Codigo</th>
                    <th>Usuario</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Lacteos</td>
                    <td>Leche Gloria</td>
                    <td>1.50</td>
                    <td>ruta_img</td>
                    <td>10</td>
                    <td>Disponible</td>
                    <td>20129219</td>
                    <td>Alberto</td>
                </tr>
            </table>
        </div>
    </div>

    <script src="assets/dashboard/main.js"></script>
</body>

</html>
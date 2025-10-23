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
        <h1>Dashboard Principal</h1>
        <div id="content-area" class="card">
            <form action="" method="">
                <div>
                    <label for="nombre">Nombre :</label>
                    <input type="text" 
                           id="nombre" 
                           placeholder="Escribe su nombre aqui">
                </div>
                <div>
                    <label for="correo">Correo Electronico :</label>
                    <input type="email" 
                           id="correo" 
                           placeholder="Escribe su correo electronico">
                </div>
                <div>
                    <label for="pass">Contraseña :</label>
                    <input type="password" 
                           id="pass" 
                           placeholder="Escribe su contraseña">
                </div>
                <div>
                     <label for="roles">Roles :</label>
                     <select name="" id="roles">
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
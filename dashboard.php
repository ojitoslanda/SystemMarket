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
    <div class="sidebar" id="sidebar">
        <div class="sidebar-content">
            <!-- LOGO DE EMPRESA -->
            <div class="profile">
                <img src="assets/images/logo/logo.png" alt="Logo de Empresa" class="logo">
                <h2>Mi Empresa</h2>
            </div>

            <!-- MENÚ -->
            <div class="menu">
                <button class="dropdown-btn" onclick="toggleSubmenu('productosSubmenu', this)">
                    <div>
                        <i class="fa-solid fa-box"></i>
                        <span>Productos</span>
                    </div>
                    <i class="fa-solid fa-chevron-down arrow"></i>
                </button>
                <div id="productosSubmenu" class="submenu">
                    <a href="#" title="Ir a la página ....">Ver productos</a>
                    <a href="#" title="Ir a la página ......">Agregar producto</a>
                </div>

                <button class="dropdown-btn" onclick="toggleSubmenu('clientesSubmenu', this)">
                    <div>
                        <i class="fa-solid fa-user-group"></i>
                        <span>Clientes</span>
                    </div>
                    <i class="fa-solid fa-chevron-down arrow"></i>
                </button>
                <div id="clientesSubmenu" class="submenu">
                    <a href="#" title="Ir a la página ......">Ver clientes</a>
                    <a href="#" title="Ir a la página .....">Registrar cliente</a>
                </div>
            </div>
        </div>

        <!-- BOTÓN CERRAR SESIÓN -->
        <div class="logout">
            <button type="button"><i class="fa-solid fa-right-from-bracket"></i> Cerrar sesión</button>
        </div>
    </div>
    <!-- CONTENIDO PRINCIPAL -->
    <div class="content" id="content">
        <h1>Dashboard Principal</h1>
        <div id="content-area" class="card">
            <p>Aqui vamos a escribir todo</p>
           
        </div>
    </div>

    <script src="assets/dashboard/main.js"></script>
</body>

</html>
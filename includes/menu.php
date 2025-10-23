    <div class="sidebar" id="sidebar">
        <div class="sidebar-content">
            <!-- LOGO DE EMPRESA -->
            <div class="profile">
                <a href="dashboard.php">
                    <img src="assets/images/logo/logo.png" alt="Logo de Empresa" class="logo">
                </a>
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
                    <a href="dash_producto_reporte.php" title="Ir a la página producto reporte">Ver productos</a>
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
                    <a href="dash_usuario_registro.php" title="Ir a la página .....">Registrar cliente</a>
                </div>
            </div>
        </div>

        <!-- BOTÓN CERRAR SESIÓN -->
        <div class="logout">
            <button type="button"><i class="fa-solid fa-right-from-bracket"></i> Cerrar sesión</button>
        </div>
    </div>

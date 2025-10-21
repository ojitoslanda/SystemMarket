<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ElGato - Market</title>
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="assets/css/responsive.css" />
  <link rel="stylesheet" href="assets/css/modal_login.css" />
  <link rel="shortcut icon" href="assets/images/logo/logo.ico" type="image/x-icon">
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  </head>

<body>
  <!-- Header -->
  <header class="header">
    <div class="header-content">
      <a href="#" class="logo">ELGATO</a>
      <select name="#" id="#" class="categories-btn">
        <option value="">Categorias</option>
        <option value="">Lacteos</option>
      </select>
      <div class="search-container">
        <input
          type="text"
          class="search-input"
          placeholder="¿Qué estás buscando?" />
        <button class="search-btn"><i class="fas fa-search"></i></button>
      </div>
      <div class="header-actions">
        <div class="dropdown">
          <a href="#" class="header-link" onclick="toggleDropdown(event)">
            <span class="greeting">Hola,</span>
            <span class="action">Inicia sesión</span>
          </a>
          <div class="dropdown-menu">
            <a href="#" class="dropdown-item" id="btnLogin">Inicia sesión</a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item" id="btnRegistrarUser">Regístrate</a>
          </div>
        </div>
        <a href="#" class="header-link cart-icon">
          <i class="fas fa-shopping-cart"></i>
          <span class="cart-badge">0</span>
        </a>
      </div>
    </div>
  </header>

  <!-- Breadcrumb -->
  <div class="breadcrumb">
    <a href="#"><i class="fas fa-home"></i> Home</a>
  </div>

  <!-- Main Content -->
  <div class="main-content">
    <!-- Products Section -->
    <section class="products-section">
      <div class="sort-container">
        <div style="display: flex; gap: 15px; align-items: center">
          <span class="sort-label">Ordenar por:</span>
          <select class="sort-select">
            <option>Recomendados</option>
            <option>Menor precio</option>
            <option>Mayor precio</option>
            <option>Más vendidos</option>
          </select>
        </div>
      </div>
      <div class="products-grid" id="productsGrid">
        <div class="product-card">
          <img src="https://images.unsplash.com/photo-1505253758473-96b7015fcd40?w=400&h=400&fit=crop" alt="Sazonador Paellero Valenciana Caja 12 g" class="product-image">
          <div class="product-brand">CARMENCITA</div>
          <div class="product-name">Sazonador Paellero Valenciana Caja 12 g</div>
          <div class="price-container">
            <div>
              S/<span class="price">4.5</span>
            </div>
          </div>
          <button class="add-to-cart-btn" onclick=""><i class="fas fa-plus"></i></button>
        </div>
      </div>
    </section>
  </div>

  <!-- Footer -->
  <footer class="footer">
    <div class="footer-bottom">
      <div class="social-links">
        <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
        <a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
        <a href="#" class="social-link"><i class="fab fa-tiktok"></i></a>
      </div>
      <div class="footer-legal">
        <a href="#">Términos y condiciones</a>
        <a href="#">Política de cookies</a>
        <a href="#">Política de privacidad</a>
      </div>
      <p class="copyright">
        © TODOS LOS DERECHOS RESERVADOS<br />
        Nombre de la Calle no me acuerdo
      </p>
    </div>
  </footer>

  <!-- The Modal LOGIN -->
  <div id="modalLogin" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
      <span class="close">&times;</span>
      <h2>Iniciar Sesión</h2>
      <form action="php/iniciar_sesion.php" method="POST">
        <label class="labelModal" for="correo">Correo</label>
        <input class="inputGeneral" type="email" name="ucorreo" id="correo" placeholder="Ingresa tu usuario" />
        <label class="labelModal" for="password">Contraseña</label>
        <input
          name="upass"
          type="password"
          id="password"
          class="inputGeneral"
          placeholder="Ingresa tu contraseña" />
        <button type="button" class="btnEntrarLogin">Entrar</button>
      </form>
    </div>
  </div>

  <div id="modalRegistrarUser" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
      <span class="closeRUser">&times;</span>
      <h2>Registrar Usuario</h2>
      <form action="php/registrar_usuario.php" method="POST">
        <label class="labelModal" for="nombre_completo">Nombre Completo</label>
        <input class="inputGeneral" type="text" id="nombre_completo" name="nom_comp" placeholder="Ingresa tu usuario" />
        <label class="labelModal" for="correo">Correo</label>
        <input class="inputGeneral" type="text" id="correo" name="correo" placeholder="Ingresa tu Correo Electrónico" />
        <label class="labelModal" for="password">Contraseña</label>
        <input
          name="pass"
          type="password"
          id="password"
          class="inputGeneral"
          placeholder="Ingresa tu contraseña" />
        <button type="submit" class="btnEntrarLogin">Entrar</button>
      </form>
    </div>
  </div>


  <script src="assets/js/toggledropdown_login.js"></script>
  <script src="assets/js/modal-login.js"></script>
  <script src="assets/js/modal-registro-usuario.js"></script>


  <?php 
    if(isset($_GET['msj'])){
      if($_GET['msj'] == "ok"){
        ?>
          <script>
              Swal.fire({
              icon: "success",
              title: "Registrado",
              text: "¡Usted esta registrado en el sistema!",
              });
          </script>
        <?php
      }else{
        ?>
          <script>
              Swal.fire({
              icon: "error",
              title: "Oops!",
              text: "¡Usted no esta registrado en el sistema!",
              });
          </script>
        <?php
      }
    }
  ?>


</body>

</html>
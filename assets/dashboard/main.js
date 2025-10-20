// Mostrar / ocultar menú lateral en móviles
function toggleSidebar() {
  document.getElementById("sidebar").classList.toggle("show");
}

// Submenús desplegables
function toggleSubmenu(id, btn) {
  const submenu = document.getElementById(id);
  submenu.classList.toggle("active");
  submenu.style.display = submenu.style.display === "flex" ? "none" : "flex";
  btn.classList.toggle("active");
}

// Mostrar contenido de ejemplo
function mostrarContenido(texto) {
  document.getElementById("content-area").innerHTML = `<h2>${texto}</h2>`;
}
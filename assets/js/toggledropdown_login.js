function toggleDropdown(event) {
    event.preventDefault(); //Evita la acción por defecto del elemento que generó el evento, Evita el comportamiento normal (por ejemplo, recargar la página).
    const dropdown = event.target.closest('.dropdown');
    dropdown.classList.toggle('active');
}

// Cerrar dropdown al hacer clic fuera
document.addEventListener('click', function (event) {
    if (!event.target.closest('.dropdown')) {
        document.querySelectorAll('.dropdown').forEach(dropdown => {
            dropdown.classList.remove('active');
        });
    } 

});

document.getElementById('btnLogin').addEventListener('click', toggleDropdown);
document.getElementById('btnRegistrarUser').addEventListener('click', toggleDropdown);

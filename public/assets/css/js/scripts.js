// JavaScript para mostrar/ocultar la barra de navegación en pantallas pequeñas
document.addEventListener('DOMContentLoaded', function () {
    var sidebar = document.querySelector('.sidebar');
    var content = document.querySelector('.content');

    // Mostrar/ocultar la barra de navegación en pantallas pequeñas
    document.querySelector('.navbar-toggler').addEventListener('click', function () {
        sidebar.classList.toggle('show');
        content.classList.toggle('hide');
    });
});

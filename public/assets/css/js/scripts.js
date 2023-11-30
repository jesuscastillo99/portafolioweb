

// Mensaje que se escribirá automáticamente
var mensaje = "Este es un párrafo que será escrito automáticamente.";

// Elemento del párrafo
var parrafo = document.getElementById('mensaje');

// Iniciar la animación al cargar la página
window.onload = function () {
    typeWriter(parrafo, mensaje);
};

// Función para la animación de escritura automática
function typeWriter(elemento, texto) {
    var i = 0;
    var velocidad = 50; // Ajusta la velocidad de escritura (milisegundos)
    function escribir() {
        if (i < texto.length) {
            elemento.innerHTML += texto.charAt(i);
            i++;
            setTimeout(escribir, velocidad);
        }
    }
    escribir();
}
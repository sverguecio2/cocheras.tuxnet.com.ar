
// Ejemplo de JavaScript de inicio para deshabilitar el envío de formularios si hay campos no válidos

(function () {

    'use strict'

    // Busca todos los formularios que queremos aplicar estilos de validación personalizados de Bootstrap
    var forms = document.querySelectorAll('.needs-validation')

    // Evita el envío de los formularios
    Array.prototype.slice.call(forms)
        .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
})()

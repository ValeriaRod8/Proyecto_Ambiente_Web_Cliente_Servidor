function subir_archivos(form) {
    let barra = form.querySelector('.barra');
    let barra_estado = form.querySelector('.barra_azul');
    let span = form.querySelector('.barra_azul span');
    let boton_cancelar = form.querySelector('.boton_cancelar');

    if (barra.style.display !== "block") {
        barra.style.display = "block";
    }

    barra_estado.classList.remove('barra_verde', 'barra_roja');
    span.innerHTML = '0%';

    // Petición AJAX XmlHttpRequest
    let peticion = new XMLHttpRequest();

    // Progreso
    peticion.upload.addEventListener("progress", function (event) {
        if (event.lengthComputable) {
            let porcentaje = Math.round((event.loaded / event.total) * 100);

            barra_estado.style.width = porcentaje + '%';
            span.innerHTML = porcentaje + '%';
        }
    });

    // Finalizado
    peticion.addEventListener('load', function () {
        console.log('Petición completada');
        if (peticion.status >= 200 && peticion.status < 300) {
            barra_estado.classList.add('barra_verde');
            span.innerHTML = 'Archivo cargado!';
        } else {
            barra_estado.classList.add('barra_roja');
            span.innerHTML = 'Error al cargar el archivo';
        }
    });

    // Error
    peticion.addEventListener('error', function (event) {
        console.error('Error en la petición:', event);
    });

    // Cancelar
    boton_cancelar.addEventListener('click', function () {
        peticion.abort();
        barra_estado.classList.add('barra_roja');
        span.innerHTML = 'Carga de archivo cancelada!';
    });

    peticion.open('post', 'server/subir.php');
    peticion.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
    peticion.onreadystatechange = function () {
        if (peticion.readyState === XMLHttpRequest.DONE) {
            if (peticion.status === 200) {
                // Petición completada con éxito
                let respuesta = JSON.parse(peticion.responseText);

                if (respuesta && respuesta.error) {
                    // Mostrar error si lo hay
                    console.error(respuesta.error);
                    barra_estado.classList.add('barra_roja');
                    span.innerHTML = 'Error: ' + respuesta.error;
                }
            }
        }
    };

    peticion.send(new FormData(form));
}

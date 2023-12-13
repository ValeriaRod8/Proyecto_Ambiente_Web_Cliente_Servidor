function loginFormulario() {
    let email = $("#email").val();
    let password = $("#password").val();

    $.ajax({
        type: "POST",
        url: "DAL/login.php",
        data: { email: email, password: password },
        success: function (response) {
            switch (response) {
                case "Administrador":
                    window.location.href = "/Proyectos/Proyecto_Ambiente_Web_Cliente_Servidor/admin/admin.php";
                    break;
                case "Cliente":
                    window.location.href = "/Proyectos/Proyecto_Ambiente_Web_Cliente_Servidor/index.php";
                    break;
                default:
                    alert(response);
                    break;
            }
        },
        error: function (error) {
            console.error('Error al enviar el formulario:', error);
        }
    });
}

function login() {
    // Obtener valores de usuario y contraseña
    let username = $('#username').val();
    let password = $('#password').val();
    console.log(username);
    // Objeto de datos a enviar al servidor
    let data = {
        username: username,
        password: password
    };
    
    console.log(data);
    $.ajax({
        type: 'POST',
        url: 'server/login.php',
        contentType: 'application/json',
        data: JSON.stringify(data),
        success: function (respuesta) {
            loginRespuesta(respuesta);
        },
        error: function (error) {
            console.error('Error en la solicitud AJAX:', error);
        }
    });
}

function loginRespuesta(respuesta) {
    if (respuesta.success) {
        window.location.href = 'productos.html';
    } else {
        let contenedorLogin = $('.container-login');
        if ($('.form-login-error').length === 0) {
            let mensajeError = $('<h2 class="form-login-error mt-5"></h2>').text(respuesta.message);
            contenedorLogin.append(mensajeError);
        } else {
            $('.form-login-error').text(respuesta.message);
            $('.form-login-error').show();
        }
    }
}

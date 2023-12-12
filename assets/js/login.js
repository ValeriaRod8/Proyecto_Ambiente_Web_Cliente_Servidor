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
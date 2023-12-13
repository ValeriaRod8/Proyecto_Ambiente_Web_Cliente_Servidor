<?php

session_start();

if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultorio Pie Salud</title>
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="stylesheet" href="assets/css/servicio.css">
</head>

<body>
    <header>
        <div class="navbar">
            <nav class="navbar__links">
                <ul>
                    <a class="navbar__logo" href="index.php">
                        <img src="assets/img/logo.png" alt="Logo">
                    </a>
                </ul>
                <ul>
                    <li><a class="navbar__link--activo" href="index.php">Inicio</a></li>
                    <li><a href="nosotros.php">Nosotros</a></li>
                    <li><a href="pediatria.php">Servicios</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                    <li><a href="Citas.php">Citas</a></li>
                    <li><a href="productos.php">Tienda</a></li>
                </ul>
                <ul>
                    <li>
                        <a href="carrito.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" fill="black" class="bi bi-cart4" viewBox="0 0 16 16">
                                <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                            </svg>
                        </a>
                    </li>
                    <?php
                    if (isset($_SESSION['login'])) {
                        echo '<li class="navbar__login"><a href="?logout">Cerrar Sesión</a></li>';
                    } else {
                        echo '<li class="navbar__login"><a href="login.php">Iniciar Sesión</a></li>';
                    }
                    ?>
                </ul>
            </nav>
        </div>
    </header>
    <div class="header-content container">
        <div class="header-txt">
            <h1>Consultorio Pie Salud</h1>
            <p>En el Consultorio nos complace darte la más cordial bienvenida. Estamos comprometidos a proporcionarte la mejor atención médica para cuidar de tu salud y bienestar.
                Nuestros servicios profesionales médicos están aquí para ofrecerte servicios de calidad y personalizados.
            </p>
            <a href="nosotros.php" class="btn-1">Información</a>
        </div>
        <div class="header-img">
            <img src="assets/img/left.png" alt="">
        </div>
    </div>
    <section class="about container">
        <div class="about-img">
            <img src="assets/img/about.png" alt="">
        </div>
        <div class="about-txt">
            <h2>¿Quienes Somos?</h2>
            <p> Nos enorgullece presentarnos como tu aliado en el cuidado integral de la salud. Somos un equipo dedicado de profesionales comprometidos con proporcionar
                servicios médicos de calidad y brindar atención personalizada a cada uno de nuestros pacientes.
                Nuestra misión es simple pero poderosa: mejorar la salud y el bienestar de nuestra comunidad. Con años de experiencia en el campo de la medicina,
                nuestro equipo médico altamente calificado se esfuerza por ofrecer un enfoque integral y compasivo para la atención médica.
                Nuestro objetivo es ayudar a nuestros pacientes a mantenerse saludables y sentirse mejor, y estamos aquí para ayudarlo a lograrlo.


            </p>
            <br>
            <p> Lo que nos distingue es nuestro compromiso con la excelencia, la empatía y la atención centrada en el paciente. Nos esforzamos por crear un ambiente cálido y acogedor
                donde te sientas escuchado y comprendido en cada visita. No solo tratamos enfermedades; promovemos la prevención y la educación para empoderarte en la toma de decisiones informadas sobre tu salud.
                Creemos en la importancia de establecer una relación de confianza a largo plazo contigo y tu familia.

            </p>
        </div>
    </section>
    <main class="servicios">

        <h2> Servicios </h2>
        <?php
        include_once 'include/templates/template-servicios.php'
        ?>

    </main>
    <section class="Formulario container" style="margin-top: 50px;">
        <form method="post" action="DAL/consultas/crearConsulta.php" autocomplete="off">
            <h2> Agenda Consulta</h2>
            <div class="input-group">
                <div class="input-container">
                    <i class="form__icon fa-solid fa-user"></i>
                    <input type="text" name="inputNombre" placeholder="Nombre" required>
                </div>
                <div class="input-container">
                    <i class="form__icon fa-solid fa-phone"></i>
                    <input type="tel" name="inputTelefono" placeholder="Teléfono" required>
                </div>
                <div class="input-container">
                    <i class="form__icon fa-solid fa-envelope"></i>
                    <input type="email" name="inputCorreo" placeholder="Correo" required>
                </div>
                <div class="input-container">
                    <textarea name="inputDetalle" placeholder="Detalles de la Consulta" required></textarea>
                </div>
                <input type="submit" class="btn" name="consultaUsuario">
            </div>
        </form>
    </section>

    <script>
        function myFuntion() {
            window.location.href = "https://localhost/Pagina Web";
        }
    </script>

</body>

</html>
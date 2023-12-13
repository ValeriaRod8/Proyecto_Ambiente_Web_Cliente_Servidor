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


    <header class="header-nosotros">
        <div class="navbar">
            <nav class="navbar__links">
                <ul>
                    <a class="navbar__logo" href="index.php">
                        <img src="assets/img/logo.png" alt="Logo">
                    </a>
                </ul>
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a class="navbar__link--activo" href="nosotros.php">Nosotros</a></li>
                    <li><a href="pediatria.php">Servicios</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                    <li><a href="citas.php">Citas</a></li>
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

    <div class="nosotros-content container">
        <div class="nosotros-txt">
            <h2 style="text-align: left;">Sobre Nosotros</h2>
            <p>Nuestra misión es simple pero poderosa: mejorar la salud y el bienestar de nuestra comunidad. Con años de experiencia en el campo de la medicina,
                nuestro equipo médico altamente calificado se esfuerza por ofrecer un enfoque integral y compasivo para la atención médica.
                Nuestro objetivo es ayudar a nuestros pacientes a mantenerse saludables y sentirse mejor, y estamos aquí para ayudarlo a lograrlo.

            </p>
        </div>
    </div>

    <div class="nosotros-content container">
        <div class="nosotros-txt">
            <h2 style="text-align: left;">Misión</h2>
            <p> Nuestra misión va más allá de ser un proveedor de servicios médicos; es un compromiso profundo con tu salud y bienestar integral.
                Nuestra misión es guiar a cada paciente hacia una vida más saludable, brindando atención médica personalizada, accesible y centrada en el individuo.
                <br> <br>
                1. Atención Centrada en el Paciente:
                Nos esforzamos por ofrecer una atención médica que va más allá de los síntomas, centrándonos en la persona en su totalidad. Escuchamos, comprendemos y colaboramos contigo para desarrollar planes de tratamiento adaptados a tus necesidades específicas.

                <br> <br>
                2. Accesibilidad y Compromiso:
                Nos comprometemos a proporcionar servicios médicos accesibles a todas las personas, sin importar su situación. Buscamos eliminar las barreras para el acceso a la atención médica,
                garantizando que cada individuo tenga la oportunidad de recibir cuidados de calidad cuando lo necesite.

                <br> <br>
                Tu salud, nuestra misión.

            </p>
        </div>
    </div>

    <div class="nosotros-content container">
        <div class="nosotros-txt">
            <h2 style="text-align: left;">Visión</h2>
            <p>No solo aspiramos a ser un centro de atención médica, sino a ser un faro de salud y bienestar en nuestra comunidad. Nuestra visión se basa en un compromiso apasionado con la excelencia clínica,
                la innovación y el impacto positivo en la vida de quienes confían en nosotros.

                <br> <br>
                1. Excelencia Clínica:
                Buscamos ser reconocidos como líderes en la prestación de servicios médicos de calidad. Desde el diagnóstico preciso hasta el tratamiento efectivo, nos esforzamos por superar las expectativas, adoptando prácticas clínicas avanzadas y manteniendo los más altos estándares de atención.
                <br> <br>
                2. Innovación Continua:
                Abrazamos la innovación como un medio para avanzar en la atención médica. Buscamos constantemente tecnologías y enfoques médicos emergentes para mejorar la eficiencia y la precisión en nuestros servicios, garantizando que nuestros pacientes reciban lo último en atención médica de vanguardia.

                <br> <br>
                3. Relación de Confianza:
                Imaginamos un ambiente donde la confianza sea el pilar fundamental de nuestra relación con los pacientes. Queremos ser tu socio de confianza en el cuidado de la salud, proporcionando orientación personalizada y apoyo continuo a lo largo de tu viaje hacia el bienestar.
            </p>
        </div>
    </div>

    <div class="nosotros-content container">
        <div class="nosotros-txt">
            <h2 style="text-align: left;">Ubicación</h2>
            <p> Actualmente nos encontramos en la siguiente ubicación 'Entre Pie y Salud, 219, Provincia de Cartago, Cartago'. Si necesitan encontrarnos para llegar al lugar pueden ingresar por medio de Google Maps
                y te traera al Consultorio. ¡No esperes mas, veni pronto!
            </p>
            <div class="mapa">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15722.660828611783!2d-83.902166!3d9.8784296!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0df715e652f5d%3A0x602df262f606f51e!2sCentro%20Pie%20y%20Salud!5e0!3m2!1ses-419!2scr!4v1702350306356!5m2!1ses-419!2scr" width="100%" height="800" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                Ver en Google Maps
                </a>
            </div>
        </div>
    </div>


    <footer class="footer" style="background-color: #fafafa; height: 260px">


    </footer>

    <?php

    ?>


    <script>
        function myFuntion() {
            window.location.href = "https://localhost/Pagina Web";
        }
    </script>

</body>

</html>
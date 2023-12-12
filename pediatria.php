<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina</title>
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/servicio.css">
    <script src="assets/js/reserva.js"></script>
</head>

<body>


    <header class="header-nosotros">

        <div class="menu container">
            <a href="index.php" class="logo">
                <img style="margin-top: 10px;" src="assets/img/logo.png" height="60px" width="100px" alt="Logo">
            </a>
            <nav class="navbar">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="nosotros.php">Nosotros</a></li>
                    <li><a href="pediatria.php" style="font-weight: bold;">Servicios</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                    <li><a href="login.php">Iniciar Sesión</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="servicios" style="height: 260px">
        <?php
        include_once 'include/templates/template-servicios.php'
        ?>

    </main>

    <div class="servicios-content container">
        <div class="servicios-txt">
            <h2 style="text-align: center;">Pediatría</h2>
            <p>Comprendemos que los niños son nuestro tesoro más valioso y merecen cuidados excepcionales. Nuestro Departamento de Pediatría está diseñado para brindar atención especializada y compasiva a los pequeños, asegurando que cada niño crezca sano, feliz y lleno de vitalidad.
                Nuestro equipo de pediatras altamente calificados se dedica a brindar atención médica de calidad a los niños, desde el nacimiento hasta la adolescencia.

        </div>
    </div>


    <div class="servicios-content container">
        <div class="servicios-txt">
            <h2 style="text-align: left;">Equipo Médico:</h2>
            <div style="display: flex; align-items: flex-start; margin-bottom: 20px;">
                <div style="margin-right: 20px; flex-shrink: 0;">
                <img src="assets/img/doctores.jpg" alt="Imagen Doctores"height="250px" width="450px">
                    <p style="text-align: left; font-size: 16px; font-weight: bold; color: black">Doctores Pedro, Ana, Juan, Lucia y Lucas.</p>
                </div>
                <p style="font-size: 16px; text-align: left;">Contamos con un equipo de pediatras altamente calificados y enfermeras dedicadas, todos ellos apasionados por la salud infantil. Estamos aquí para responder a tus preguntas, abordar tus preocupaciones y colaborar contigo para garantizar el desarrollo saludable de tu hijo.
                </p>
            </div>
        </div>
    </div>


    <div class="servicios-content container">
        <div class="servicios-txt">
            <h2 style="text-align: left;">Nuestro Compromiso:</h2>
            <div style="display: flex; align-items: flex-start; margin-bottom: 20px;">
                <div style="margin-right: 20px; flex-shrink: 0;">
                <img src="assets/img/padres.jpg" alt="Imagen Pediatría"height="410px" width="400px">
                    <p style="text-align: left; font-size: 16px; font-weight: bold; color: black"> Doctor Martínez.</p>
                </div>
                <p style="font-size: 16px; text-align: left;">Nos enorgullece comprometernos con la salud y el bienestar de tus hijos desde el momento en que nacen hasta la adolescencia. Nuestra misión es proporcionar atención pediátrica integral, centrada en el niño y orientada hacia la prevención, el diagnóstico y el tratamiento de enfermedades infantiles.
                </p>
            </div>
        </div>
    </div>


    <div class="servicios-content container">
        <div class="servicios-txt">
            <h2 style="text-align: left;">Educación para Padres:</h2>
            <div style="display: flex; align-items: flex-start; margin-bottom: 20px;">
                <div style="margin-right: 20px; flex-shrink: 0;">
                    <img src="assets/img/pediatra.png" alt="Imagen Pediatría"height="250px" width="400px">
                
                    <p style="text-align: left; font-size: 16px; font-weight: bold; color: black">Doctor Fernández.</p>
                </div>
                <p style="font-size: 16px; text-align: left;">Nos dedicamos a proporcionar a los padres las herramientas y la información necesarias para cuidar a sus hijos en casa. Ofrecemos orientación sobre la crianza, desarrollo infantil y manejo de enfermedades comunes para fortalecer la salud de tu familia.
                </p>
            </div>
        </div>
    </div>

    <button style="display: block; margin: 0 auto; padding: 15px 30px; font-size: 18px; background-color: #3498db; color: #fff; border: none; border-radius: 5px; cursor: pointer;" onclick="location.href='DAL/reserva.php'">Reservar</button>

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
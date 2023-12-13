<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina</title>
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
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="nosotros.php">Nosotros</a></li>
                    <li><a class="navbar__link--activo" href="pediatria.php">Servicios</a></li>
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

    <main class="servicios" style="height: 260px">
        <?php
        include_once 'include/templates/template-servicios.php'
        ?>

    </main>

    <div class="servicios-content container">
        <div class="servicios-txt">
            <h2 style="text-align: center;">Dermatología</h2>
            <p>Ofrecemos una amplia gama de servicios dermatológicos, incluyendo el tratamiento de enfermedades de la piel, procedimientos cosméticos, cirugía dermatológica y terapias avanzadas. Ya sea que necesites tratamiento para el acné, la detección de cáncer de piel o procedimientos estéticos, estamos aquí para ayudarte.
            </p>
        </div>
    </div>


    <div class="servicios-content container">
        <div class="servicios-txt">
            <h2 style="text-align: left;">Equipo Médico</h2>
            <div style="display: flex; align-items: flex-start; margin-bottom: 20px;">
                <div style="margin-right: 20px; flex-shrink: 0;">
                    <img src="assets/img/doctora.jpg" alt="Imagen Doctora" height="250px" width="400px">
                </div>
                <p style="font-size: 16px; text-align: left;"> Ofrecmos una atención adecuada para en el cuidado de la piel, desde el acné hasta el cáncer de piel y todo lo demás. Nuestros dermatólogos están capacitados para evaluar y tratar una amplia gama de afecciones de la piel, incluidas las más comunes, como el acné, el eczema y la psoriasis, así como las más raras. Nuestros dermatólogos también están capacitados para evaluar y tratar el cáncer de piel, incluido el melanoma, el tipo más grave de cáncer de piel.
                </p>
            </div>
        </div>
    </div>


    <div class="servicios-content container">
        <div class="servicios-txt">
            <h2 style="text-align: left;">Enfoque en la Prevención</h2>
            <div style="display: flex; align-items: flex-start; margin-bottom: 20px;">
                <div style="margin-right: 20px; flex-shrink: 0;">
                    <img src="assets/img/vista.jpg" alt="Imagen Doctora" height="350px" width="400px">
                    <p style="text-align: left; font-size: 16px; font-weight: bold; color: black">Nombre</p>
                </div>
                <p style="font-size: 16px; text-align: left;">Abogamos por la prevención y la educación sobre el cuidado de la piel. Además de tratar afecciones existentes, trabajamos contigo para establecer rutinas de cuidado de la piel y proporcionar información sobre la protección solar y prácticas saludables para mantener la salud de tu piel a largo plazo.
                </p>
            </div>
        </div>
    </div>


    <div class="servicios-content container">
        <div class="servicios-txt">
            <h2 style="text-align: left;">Ambiente de Cuidado</h2>
            <div style="display: flex; align-items: flex-start; margin-bottom: 20px;">
                <div style="margin-right: 20px; flex-shrink: 0;">
                    <img src="assets/img/prevencion.jpg" alt="Imagen Prevencion" height="250px" width="400px">
                </div>
                <p style="font-size: 16px; text-align: left;">Creamos un entorno acogedor y profesional para que te sientas cómodo durante tus visitas. Nuestro objetivo es hacer que cada consulta sea una experiencia positiva, donde puedas discutir tus preocupaciones y recibir el mejor cuidado dermatológico disponible.

                    <br> <br>
                    Confía en nosotros para proporcionarte la atención de dermatología experta y compasiva que tu piel merece. Estamos aquí para ayudarte a alcanzar y mantener una piel saludable y radiante.

                    <br> <br>
                    Tu piel, nuestra prioridad.
                </p>S
            </div>
        </div>
    </div>

    <div style="margin: 10rem;">
        <button style="display: block; margin: 0 auto; padding: 15px 30px; font-size: 18px; background-color: #3498db; color: #fff; border: none; border-radius: 5px; cursor: pointer;" onclick="location.href='DAL/reserva.php'">Reservar</button>
    </div>

    <?php

    ?>


    <script>
        function myFuntion() {
            window.location.href = "https://localhost/Pagina Web";
        }
    </script>

</body>

</html>
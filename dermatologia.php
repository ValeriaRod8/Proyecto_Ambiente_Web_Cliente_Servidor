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
</head>

<body>
    <header class="header-nosotros">

        <div class="menu container">
            <a href="index.php">
                <img src="logo.png" alt="Logo">
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
            <h2 style="text-align: center;">Dermatologia</h2>
            <p>Ofrecemos una amplia gama de servicios dermatológicos, incluyendo el tratamiento de enfermedades de la piel, procedimientos cosméticos, cirugía dermatológica y terapias avanzadas. Ya sea que necesites tratamiento para el acné, la detección de cáncer de piel o procedimientos estéticos, estamos aquí para ayudarte.
            </p>
        </div>
    </div>


    <div class="servicios-content container">
        <div class="servicios-txt">
            <h2 style="text-align: left;">Equipo Medico</h2>
            <div style="display: flex; align-items: flex-start; margin-bottom: 20px;">
                <div style="margin-right: 20px; flex-shrink: 0;">
                    <img src="https://institutomaternoinfantil.com/wp-content/uploads/2018/08/Dr.-Francisco-Bencosme-Pediatra-Ext.-5154-Suite-104-267x368.jpg" alt="Imagen Pediatría" style="width: 200px; height: auto;">
                    <p style="text-align: left; font-size: 16px; font-weight: bold; color: black">Nombre</p>
                </div>
                <p style="font-size: 16px; text-align: left;"> psum dolor sit amet consectetur adipisicing elit. Ipsa officia aspernatur quis incidunt consequuntur atque! Totam explicabo veritatis id quis mollitia quas qui deserunt harum, nisi ratione odit repellat eum! orem Ipsum
                    is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                    text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    ipsum dolor sit amet consectetur adipisicing elit. Ipsa officia aspernatur quis incident sequuntur atque took a galley
                    of type and scrambled it to make a type specimen book. ipsum dolor sit amet consectetur adipisicing elit. Ipsa officia aspernatur!
                </p>
            </div>
        </div>
    </div>


    <div class="servicios-content container">
        <div class="servicios-txt">
            <h2 style="text-align: left;">Enfoque en la Prevención:</h2>
            <div style="display: flex; align-items: flex-start; margin-bottom: 20px;">
                <div style="margin-right: 20px; flex-shrink: 0;">
                    <img src="https://institutomaternoinfantil.com/wp-content/uploads/2018/08/Dr.-Francisco-Bencosme-Pediatra-Ext.-5154-Suite-104-267x368.jpg" alt="Imagen Pediatría" style="width: 200px; height: auto;">
                    <p style="text-align: left; font-size: 16px; font-weight: bold; color: black">Nombre</p>
                </div>
                <p style="font-size: 16px; text-align: left;">Abogamos por la prevención y la educación sobre el cuidado de la piel. Además de tratar afecciones existentes, trabajamos contigo para establecer rutinas de cuidado de la piel y proporcionar información sobre la protección solar y prácticas saludables para mantener la salud de tu piel a largo plazo.
                </p>
            </div>
        </div>
    </div>


    <div class="servicios-content container">
        <div class="servicios-txt">
            <h2 style="text-align: left;">Ambiente de Cuidado:</h2>
            <div style="display: flex; align-items: flex-start; margin-bottom: 20px;">
                <div style="margin-right: 20px; flex-shrink: 0;">
                    <img src="https://institutomaternoinfantil.com/wp-content/uploads/2018/08/Dr.-Francisco-Bencosme-Pediatra-Ext.-5154-Suite-104-267x368.jpg" alt="Imagen Pediatría" style="width: 200px; height: auto;">
                    <p style="text-align: left; font-size: 16px; font-weight: bold; color: black">Nombre</p>
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
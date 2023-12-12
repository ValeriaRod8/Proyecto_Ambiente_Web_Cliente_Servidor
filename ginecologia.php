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
            <a href="index.php" class="logo">
                <img style="margin-top: 10px;" src="assets/img/logo.png" height="60px" width="100px" alt="Logo">
            </a>
            <nav class="navbar">
                <ul>
                <li><a href="index.php">Inicio</a></li>
                    <li><a href="nosotros.php">Nosotros</a></li>
                    <li><a href="pediatria.php" style="font-weight: bold;">Servicios</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                    <li><a href="Citas.php">Citas</a></li>
                    <li><a href="productos.html">Tienda</a></li>
                    <?php
                    if (isset($_SESSION['login'])) {
                        echo '<li><a href="?logout">Cerrar Sesión</a></li>';
                    } else {
                        echo '<li><a href="login.php">Iniciar Sesión</a></li>';
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
            <h2 style="text-align: center;">Ginecología</h2>
            <p>La ginecología, rama de la medicina dedicada a la salud reproductiva de la mujer, ha experimentado notables avances que han impactado positivamente en la prevención, diagnóstico y tratamiento de diversas condiciones. Estos progresos no solo han mejorado la calidad de vida de las mujeres, sino que también han contribuido a un enfoque más integral y personalizado en la atención médica femenina.
            </p>
        </div>
    </div>


    <div class="servicios-content container">
        <div class="servicios-txt">
            <h2 style="text-align: left;">Prevención y Detección Temprana</h2>
            <div style="display: flex; align-items: flex-start; margin-bottom: 20px;">
                <div style="margin-right: 20px; flex-shrink: 0;">
                    <img src="https://aisafiv.com/wp-content/uploads/2019/11/que-es-la-ginecologia-zaragoza.jpg" alt="Imagen Prevencion"height="250px" width="400px">
                    <p style="text-align: left; font-size: 16px; font-weight: bold; color: black">Doctora Julia</p>
                </div>
                <p style="font-size: 16px; text-align: left;">Los avances en ginecología han fortalecido las estrategias de prevención y detección temprana de enfermedades, como el cáncer de cuello uterino y de mama. Las pruebas de Papanicolaou y las mamografías, complementadas por nuevas tecnologías, permiten identificar posibles problemas de manera más eficiente, facilitando tratamientos oportunos y efectivos.
                </p>
            </div>
        </div>
    </div>


    <div class="servicios-content container">
        <div class="servicios-txt">
            <h2 style="text-align: left;">Empoderamiento y Educación</h2>
            <div style="display: flex; align-items: flex-start; margin-bottom: 20px;">
                <div style="margin-right: 20px; flex-shrink: 0;">
                    <img src="https://img.freepik.com/fotos-premium/doctor-guantes-goma-maqueta-plastico-utero-femenino-primer-plano-clinica-enfermedades-concepto-sistema-reproductor-femenino_151013-26222.jpg?size=626&ext=jpg"alt="Imagen Prevencion"height="250px" width="400px">
                    <p style="text-align: left; font-size: 16px; font-weight: bold; color: black">Doctora Jimena A</p>
                </div>
                <p style="font-size: 16px; text-align: left;">Un aspecto clave de la ginecología moderna es el empoderamiento de las mujeres a través de la educación. Se promueve la conciencia sobre la anatomía y fisiología femeninas, la importancia del autoexamen y la participación activa en decisiones relacionadas con la salud ginecológica, fortaleciendo así la autonomía de las mujeres en el cuidado de su propio cuerpo.
                </p>
            </div>
        </div>
    </div>


    <div class="servicios-content container">
        <div class="servicios-txt">
            <h2 style="text-align: left;">Cuidado Integral en Todas las Etapas de la Vida</h2>
            <div style="display: flex; align-items: flex-start; margin-bottom: 20px;">
                <div style="margin-right: 20px; flex-shrink: 0;">
                    <img src="https://www.mesadelcastillo.com/wp-content/uploads/2019/10/hospital-mesa-del-castillo-ginecologia-y-fertilidad-002b.jpg" alt="Imagen Prevencion"height="360px" width="400px">
                    <p style="text-align: left; font-size: 16px; font-weight: bold; color: black">Doctora Rosa</p>
                </div>
                <p style="font-size: 16px; text-align: left;">La atención ginecológica no se limita a la maternidad o a problemas específicos. En la actualidad, se promueve un enfoque integral que aborda las necesidades de las mujeres en todas las etapas de la vida. La menopausia, por ejemplo, es ahora gestionada con opciones de tratamiento personalizadas para aliviar los síntomas y mejorar la calidad de vida.
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
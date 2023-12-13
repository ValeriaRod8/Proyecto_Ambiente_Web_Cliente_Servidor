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
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
            <input type="checkbox" id="menu" />
            <nav class="navbar">
                <ul>
                <li><a href="index.php">Inicio</a></li>
                    <li><a href="nosotros.php">Nosotros</a></li>
                    <li><a href="pediatria.php"style="font-weight: bold;">Servicios</a></li>
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
            <h2 style="text-align: center;">Cardiología</h2>
            <p>La cardiología, como disciplina médica, ha experimentado notables avances que transforman la manera en que abordamos las enfermedades cardiovasculares. En la vanguardia de esta revolución, nuestro equipo de cardiólogos está comprometido con ofrecer la mejor atención posible para garantizar la salud cardiovascular de nuestros pacientes.
            </p>
        </div>
    </div>


    <div class="servicios-content container">
        <div class="servicios-txt">
            <h2 style="text-align: left;">Medicina Personalizada</h2>
            <div style="display: flex; align-items: flex-start; margin-bottom: 20px;">
                <div style="margin-right: 20px; flex-shrink: 0;">
                    <img src="https://www.topdoctors.es/files/Image/large/c47fdb861cffb68169e1b88cfd008a98.jpg" alt="Imagen" height="250px" width="400px">
                    <p style="text-align: left; font-size: 16px; font-weight: bold; color: black">Doctora Marta</p>
                </div>
                <p style="font-size: 16px; text-align: left;">La medicina personalizada ha llegado a la cardiología, permitiendo adaptar los tratamientos a las características genéticas y biomoleculares únicas de cada paciente. Esto no solo mejora la eficacia de los tratamientos, sino que también reduce los riesgos y efectos secundarios asociados.
                </p>
            </div>
        </div>
    </div>


    <div class="servicios-content container">
        <div class="servicios-txt">
            <h2 style="text-align: left;">Prevención y Estilo de Vida</h2>
            <div style="display: flex; align-items: flex-start; margin-bottom: 20px;">
                <div style="margin-right: 20px; flex-shrink: 0;">
                    <img src="https://clinicasascires.com/media/62e3d248b6ab4_Ascires%20Cardiologia.png" alt="Imagen" height="200px" width="450px">
                    <p style="text-align: left; font-size: 16px; font-weight: bold; color: black">Estilo de Vida</p>
                </div>
                <p style="font-size: 16px; text-align: left;">La prevención sigue siendo un pilar fundamental en el cuidado cardiovascular. Las estrategias de modificación del estilo de vida, como la adopción de una dieta balanceada, la actividad física regular y la gestión del estrés, son esenciales para reducir los factores de riesgo. Los dispositivos wearables y las aplicaciones de salud digital también han demostrado ser herramientas valiosas para el monitoreo continuo y la intervención preventiva.
                </p>
            </div>
        </div>
    </div>


    <div class="servicios-content container">
        <div class="servicios-txt">
            <h2 style="text-align: left;">Tratamientos Innovadores</h2>
            <div style="display: flex; align-items: flex-start; margin-bottom: 20px;">
                <div style="margin-right: 20px; flex-shrink: 0;">
                    <img src="https://st2.depositphotos.com/3153157/6161/i/450/depositphotos_61615207-stock-photo-doctorconsult-patient-with-heart-problems.jpg" alt="Imagen" height="250px" width="400px">
                    <p style="text-align: left; font-size: 16px; font-weight: bold; color: black">Doctor Francisco</p>
                </div>
                <p style="font-size: 16px; text-align: left;">Los tratamientos para enfermedades cardiovasculares han evolucionado notablemente. La cirugía cardíaca mínimamente invasiva y los procedimientos de cateterismo ofrecen opciones más seguras y efectivas para abordar afecciones como las obstrucciones arteriales y las válvulas cardíacas defectuosas. Además, las terapias farmacológicas han mejorado, proporcionando opciones más específicas y con menos efectos secundarios.
                </p>
            </div>
        </div>
    </div>


    </div>

    <button style="display: block; margin: 0 auto; padding: 15px 30px; font-size: 18px; background-color: #3498db; color: #fff; border: none; border-radius: 5px; cursor: pointer;" onclick="location.href='DAL/reserva.php'">Reservar</button>

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
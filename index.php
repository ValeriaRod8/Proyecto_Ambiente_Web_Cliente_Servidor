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


    <header class="header">


        <div class="menu container">
            <a href="index.php" class="logo">
                <img src="logo.png" alt="Logo">
            </a>

            <input type="checkbox" id="menu" />
            <label for="menu">
                <img src="assets/img/menu.png" class="menu-img" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="index.php" style="font-weight: bold;">Inicio</a></li>
                    <li><a href="nosotros.php">Nosotros</a></li>
                    <li><a href="pediatria.php">Servicios</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                    <li><a href="admin/admin.php">Admin (Opcion Temporal)</a></li>
                </ul>
            </nav>
        </div>

        <div class="header-content container">
            <div class="header-txt">
                <h1>Consultorio Medical</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Ipsa officia aspernatur quis incidunt consequuntur atque! Totam explicabo
                    veritatis id quis mollitia quas
                    qui deserunt harum, nisi ratione odit repellat eum!
                </p>
                <a href="nosotros.php" class="btn-1">Informacion</a>
            </div>
            <div class="header-img">
                <img src="assets/img/left.png" alt="">
            </div>
        </div>
    </header>


    <section class="about container">

        <div class="about-img">
            <img src="assets/img/about.png" alt="">
        </div>
        <div class="about-txt">
            <h2>¿Quienes Somos?</h2>
            <p> psum dolor sit amet consectetur adipisicing elit.
                Ipsa officia aspernatur quis incidunt consequuntur atque! Totam explicabo veritatis id quis mollitia
                quas qui deserunt harum,
                nisi ratione odit repellat eum!
                orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                and scrambled it to make a type specimen book. ipsum dolor sit amet consectetur adipisicing elit.
                Ipsa officia aspernatur quis incidunt consequuntur atque! Totam explicabo veritatis id quis mollitia
                quas qui deserunt harum,
                nisi ratione odit repellat eum!
            </p>
            <br>
            <p>ipsum dolor sit amet consectetur adipisicing elit.
                Ipsa officia aspernatur quis incidunt consequuntur atque! Totam explicabo veritatis id quis mollitia
                quas qui deserunt harum,
                nisi ratione odit repellat eum!
                orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                and scrambled it to make a type specimen book. ipsum dolor sit amet consectetur adipisicing elit.
                Ipsa officia aspernatur quis incidunt consequuntur atque! Totam explicabo veritatis id quis mollitia
                quas qui deserunt harum,
                nisi ratione odit repellat eum!

                PRUEBA DE GITHUB
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
        <form method="post" action="DAL/crearConsulta.php" autocomplete="off">
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

    <footer class="footer" style="background-color: #fafafa; height: 260px">
        <!--         <div class="footer-content-container">

            <div class="link">
                <a href="#" class="logo">logo</a>
            </div>

            <div class="link">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </div>

        </div> -->

    </footer>

    <?php
    //include("send.php");
    /* require_once 'DAL/consulta.php';
    testConectar(); */
    ?>

    <script>
        function myFuntion() {
            window.location.href = "https://localhost/Pagina Web";
        }
    </script>

</body>

</html>
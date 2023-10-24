<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>

<body>


    <header class="header">

        <div class="menu container">
            <a href="#" class="logo">Logo</a>
            <input type="checkbox" id="menu" />
            <label for="menu">
                <img src="imagenes/menu.png" class="menu-img" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Contacto</a></li>
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
                <a href="#" class="btn-1">Informacion</a>
            </div>
            <div class="header-img">
                <img src="imagenes/left.png" alt="">
            </div>
        </div>
    </header>


    <section class="about container">

        <div class="about-img">
            <img src="imagenes/about.png" alt="">
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
            </p>
        </div>

    </section>


    <main class="Servicios" style="background-color: #fafafa; height: 260px" >

        <h2> Servicios </h2>
        <div class="servicios-content-container">

            <div class="servicio-1">
                <i class="fa-sharp fa-solid fa-hospital-user"></i>
                <h3>Pediatría</h3>
            </div>

            <div class="servicio-2">
                <i class="fa-solid fa-bed pulse"></i>
                <h3>Demartología</h3>
            </div>

            <div class="servicio-3">
                <i class="fa-sharp fa-solid fa-hospital"></i>
                <h3>Cardiología</h3>
            </div>

            <div class="servicio-4">
                <i class="fa-sharp fa-solid fa-stethoscope"></i>
                <h3>Ginecología</h3>
            </div>

        </div>
    </main>


    <section class="Formulario container" style="margin-top: 50px;">
        <form method="post" autocomplete="off">
            <h2> Agenda Consulta</h2>
            <div class="input-group">
                <div class="input-container">
                    <input type="text" name="name" placeholder="Nombre y Apellido">
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="input-container">
                    <input type="tel" name="phone" placeholder="Telefono Celular">
                    <i class="fa-solid fa-phone"></i>
                </div>
                <div class="input-container">
                    <input type="email" name="email" placeholder="Correo">
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <div class="input-container">
                    <textarea name="message" placeholder="Detalles de la Consulta"></textarea>
                </div>
                <input type="submit" name="send" class="btn" onClick="myFuntion()">

            </div>

        </form>
    </section>

    <footer class="footer" style="background-color: #fafafa; height: 260px">
        <div class="footer-content-container">

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

        </div>

    </footer>

    <?php
        include("send.php");   
        ?>

    <script>
        function myFuntion() {
            window.location.href = "https://localhost/Pagina Web";
        }</script>

</body>

</html>
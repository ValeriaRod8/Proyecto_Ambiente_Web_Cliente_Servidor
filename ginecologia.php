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
            <p>psum dolor sit amet consectetur adipisicing elit. Ipsa officia aspernatur quis incidunt consequuntur atque! Totam explicabo veritatis id quis mollitia quas qui deserunt harum, nisi ratione odit repellat eum! orem Ipsum
                is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                ipsum dolor sit amet consectetur adipisicing elit. Ipsa officia aspernatur quis incident sequuntur atque took a galley
                of type and scrambled it to make a type specimen book. ipsum dolor sit amet consectetur adipisicing elit. Ipsa officia aspernatur!
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
                <p style="font-size: 16px; text-align: left;">psum dolor sit amet consectetur adipisicing elit. Ipsa officia aspernatur quis incidunt consequuntur atque! Totam explicabo veritatis id quis mollitia quas qui deserunt harum, nisi ratione odit repellat eum! orem Ipsum
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
            <div style="display: flex; align-items: flex-start; margin-bottom: 20px;">
                <div style="margin-right: 20px; flex-shrink: 0;">
                    <img src="https://institutomaternoinfantil.com/wp-content/uploads/2018/08/Dr.-Francisco-Bencosme-Pediatra-Ext.-5154-Suite-104-267x368.jpg" alt="Imagen Pediatría" style="width: 200px; height: auto;">
                    <p style="text-align: left; font-size: 16px; font-weight: bold; color: black">Nombre</p>
                </div>
                <p style="font-size: 16px; text-align: left;">psum dolor sit amet consectetur adipisicing elit. Ipsa officia aspernatur quis incidunt consequuntur atque! Totam explicabo veritatis id quis mollitia quas qui deserunt harum, nisi ratione odit repellat eum! orem Ipsum
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
            <div style="display: flex; align-items: flex-start; margin-bottom: 20px;">
                <div style="margin-right: 20px; flex-shrink: 0;">
                    <img src="https://institutomaternoinfantil.com/wp-content/uploads/2018/08/Dr.-Francisco-Bencosme-Pediatra-Ext.-5154-Suite-104-267x368.jpg" alt="Imagen Pediatría" style="width: 200px; height: auto;">
                    <p style="text-align: left; font-size: 16px; font-weight: bold; color: black">Nombre</p>
                </div>
                <p style="font-size: 16px; text-align: left;">psum dolor sit amet consectetur adipisicing elit. Ipsa officia aspernatur quis incidunt consequuntur atque! Totam explicabo veritatis id quis mollitia quas qui deserunt harum, nisi ratione odit repellat eum! orem Ipsum
                    is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                    text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    ipsum dolor sit amet consectetur adipisicing elit. Ipsa officia aspernatur quis incident sequuntur atque took a galley
                    of type and scrambled it to make a type specimen book. ipsum dolor sit amet consectetur adipisicing elit. Ipsa officia aspernatur!
                </p>
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
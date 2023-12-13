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
                    <li><a href="pediatria.php">Servicios</a></li>
                    <li><a class="navbar__link--activo" href="contacto.php">Contacto</a></li>
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

    <main style="margin-top: 5rem;">
        <form action="#" method="post">
            <h2 style="text-align: left; color: black; font-weight: bold;">Contáctenos</h2>

            <label for="nombre" style="display: block; margin-bottom: 10px; width: 100%; font-weight: bold; font-size: 18px;">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required style="width: 100%; margin-bottom: 20px; padding: 5px; font-size: 16px;">

            <label for="telefono" style="display: block; margin-bottom: 10px; width: 100%; font-weight: bold; font-size: 18px;">Teléfono:</label>
            <input type="tel" id="telefono" name="telefono" required style="width: 100%; margin-bottom: 20px; padding: 5px; font-size: 16px;">

            <label for="correo" style="display: block; margin-bottom: 10px; width: 100%; font-weight: bold; font-size: 18px;">Correo:</label>
            <input type="email" id="correo" name="correo" required style="width: 100%; margin-bottom: 20px; padding: 5px; font-size: 16px;">

            <label for="mensaje" style="display: block; margin-bottom: 10px; width: 100%; font-weight: bold; font-size: 18px;">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" required style="width: 100%; margin-bottom: 20px; padding: 5px; font-size: 16px;"></textarea>

            <div style="text-align: center;">
                <button type="submit" style="font-weight: bold; font-size: 18px;">Contactar</button>
            </div>
        </form>
    </main>



    <script>
        function myFuntion() {
            window.location.href = "https://localhost/Pagina Web";
        }
    </script>

</body>

</html>
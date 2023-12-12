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
                    <li><a href="pediatria.php">Servicios</a></li>
                    <li><a href="contacto.php" style="font-weight: bold;">Contacto</a></li>
                    <li><a href="login.php">Iniciar Sesión</a></li>
                </ul>
            </nav>
        </div>
    </header>


    <form action="#" method="post">
        <h2 style="text-align: left; color: black; font-weight: bold;">Contactenos</h2>

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
    <script>
        function myFuntion() {
            window.location.href = "https://localhost/Pagina Web";
        }
    </script>

</body>

</html>
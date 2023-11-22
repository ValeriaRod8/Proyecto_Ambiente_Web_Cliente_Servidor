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
            <input type="checkbox" id="menu" />
            <label for="menu">
                <img src="assets/img/menu.png" class="menu-img" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="nosotros.php">Nosotros</a></li>
                <li><a href="pediatria.php" style="font-weight: bold;">Servicios</a></li>
                <li><a href="contacto.php">Contacto</a></li>
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
            <h2 style="text-align: center;">Cardiologia</h2>
                <p>psum dolor sit amet consectetur adipisicing elit. Ipsa officia aspernatur quis incidunt consequuntur atque! Totam explicabo veritatis id quis mollitia quas qui deserunt harum, nisi ratione odit repellat eum! orem Ipsum 
                    is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy 
                    text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                    ipsum dolor sit amet consectetur adipisicing elit. Ipsa officia aspernatur quis incident sequuntur atque took a galley 
                    of type and scrambled it to make a type specimen book. ipsum dolor sit amet consectetur adipisicing elit. Ipsa officia aspernatur!
                </p>
            </div>
        </div>
       <!-- Equipo Medico --> 

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

        
        </div>


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
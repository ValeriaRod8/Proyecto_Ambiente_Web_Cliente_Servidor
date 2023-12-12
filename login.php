<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/396bd50d12.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <nav class="navbar">
            <ul class="nav-items">
                <li class="d-flex align-items-center">
                    <a class="link-button" href="index.php"><i class="icon-button fa-solid fa-circle-chevron-left mr-3"></i>Volver</a>
                </li>
            </ul>
        </nav>
    </header>
    <main class="container">
        <div class="container-login mt-5" id="container-login">
            <h1>Iniciar Sesión</h1>
            <form id="login-form" class="d-flex flex-column align-items-center">
                <div class="mt-5 container-input">
                    <label class="form-label" for="email">Correo</label>
                    <input class="form-control form-input-login" type="email" id="email" name="email" required>
                </div>
                <div class="mt-5 container-input">
                    <label class="form-label" for="password">Contraseña</label>
                    <input class="form-control form-input-login" type="password" id="password" name="password" minlength="6" required>
                </div>
                <div class="mt-4 container-input d-flex flex-row justify-content-end">
                    <p><a href="register.php" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Registrarse</a></p>
                </div>
                <div class="form-container-button">
                    <button class="form-button-login btn btn-primary mt-5 px-5 fw-bold" type="button" id="login" name="login" onclick="loginFormulario()">Entrar</button>
                </div>
            </form>
        </div>
    </main>
    <script src="assets/js/jquery-3.5.1.js"></script>
    <script src="assets/js/login.js"></script>
</body>

</html>
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
</head>

<body>
    <header>
        <nav class="navbar">
            <ul class="nav-items">
                <li><a href="index.php">Volver</a></li>
            </ul>
        </nav>
    </header>
    <main class="container">
        <div class="container-login" id="container-login">
            <h1>Iniciar Sesión</h1>
            <form id="login-form" class="mt-5">
                <div class="mb-5 container-input">
                    <label class="form-label" for="username">Usuario</label>
                    <input class="form-control form-input-login" type="text" id="username" name="username" required>
                </div>
                <div class="mb-5">
                    <label class="form-label" for="password">Contraseña</label>
                    <input class="form-control form-input-login" type="password" id="password" name="password" required>
                </div>
                <div class="form-container-button">
                    <button class="form-button-login btn btn-primary mt-5 px-5 fw-bold" type="button" id="login">Entrar</button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>
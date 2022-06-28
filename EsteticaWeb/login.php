<?php session_start(); ?>
<html>

<head>
    <meta charset="utf-8">
    <link rel="icon" href="../Logo.jpg">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-image: url('img/fondologin.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
</head>

<body>
    <?php include "php/navbar.php"; ?>
    <div class="container">
        <div class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
            <div class="card p-5 bg-dark text-white col-md-4">
                <h2>Iniciar sesión</h2>
                <form role="form" name="login" action="php/login.php" method="post">
                    <div class="form-group m-2">
                        <label for="username">Nombre de usuario o email</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario">
                    </div>
                    <div class="form-group m-2">
                        <label for="password">Contrase&ntilde;a</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Contrase&ntilde;a">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary mt-3 w-50">Acceder</button>
                        <br>
                        <br>
                        <a class="btn btn-outline-primary" href="./registro.php">Registrarme</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="js/valida_login.js"></script>
</body>

</html>
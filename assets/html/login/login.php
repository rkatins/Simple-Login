<?php
    require_once('../../php/Usuario.php');
    $Usuario = new Usuario();

    session_start();

    if (isset($_SESSION['id'])) header('Location: ../../../index.php');

    echo <<< HTML
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
            <link rel="stylesheet" href="../../css/alert.css">
            
            <title>Iniciar sesión</title>
        </head>
        <body>
            <form action="" method="POST">
                <div>
                    <label for="email">E-mail:</label>
                    <input required="" name="email" type="email">
                </div>

                <div>
                    <label for="password">Contraseña:</label>
                    <input required="" name="password" type="password">
                </div>

                <input type="submit" class="btn" value="Iniciar sesión">
            </form>

            <a href="./register.php">¿No tienes cuenta todavia?</a>
        </body>
        </html>
    HTML;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['email']) && isset($_POST['password'])) {
            $loginEmail = false;
            $loginPass = false;

            if (isset($_POST['email'])) $loginEmail = $Usuario->mLoginVerifyEmail($_POST['email']);

            if (isset($_POST['password'])) $loginPass = $Usuario->mLoginVerifyPass($_POST['password'], $_POST['email']);

            if ($loginEmail && $loginPass)
                $Usuario->mLogin($_POST['email']);
            else
                $Usuario->mLoginFail();
        }
    }
?>
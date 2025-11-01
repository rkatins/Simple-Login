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
            
            <title>Registrarse</title>
        </head>
        <body>
            <form action="" method="POST">
                <div>
                    <label for="username">Nombre:</label>
                    <input required="" name="username" type="text">
                </div>

                <div>
                    <label for="email">E-mail:</label>
                    <input required="" name="email" type="email">
                </div>

                <div>
                    <label for="password">Contraseña:</label>
                    <input required="" name="password" type="password">
                </div>

                <div>
                    <label for="confirm-password">Confirmar contraseña:</label>
                    <input required="" name="confirm_password" type="password">
                </div>

                <div>
                    <label for="checkbox">Aceptar uso y condiciones:</label>
                    <input required="" name="checkbox" type="checkbox">
                </div>

                <input type="submit" class="btn" value="Registrarse">
            </form>
    HTML;

    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $registerUser = false;
        $registerEmail = false;
        $registerPass = false;

        if (isset($_POST['username'])) $registerUser = $Usuario->mRegisterVerifyUser($_POST['username']);

        if (isset($_POST['email'])) $registerEmail = $Usuario->mRegisterVerifyEmail($_POST['email']);

        if (isset($_POST['password']) && isset($_POST['confirm_password'])) $registerPass = $Usuario->mRegisterVerifyPass($_POST['password'], $_POST['confirm_password']);

        if ($registerUser && $registerEmail && $registerPass) $Usuario->mNewUser($_POST['username'], $_POST['email'], $_POST['password']);
    }
    
    echo <<< HTML
            <a href="./login.php"><button>Volver al login</button></a>
        </body>
        </html>
    HTML;
?>
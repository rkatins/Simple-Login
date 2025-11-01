<?php
    require_once('./assets/php/Coche.php');

    $Coche = new Coche();

    if (isset($_GET['id_delete'])) {
        $Coche->mDeleteById($_GET['id_delete']);
        header('Location: index.php');
    }

    echo <<< HTML
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">

            <title>Concesionario</title>
        </head>
        <body>
            <table>
                <tr>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Color</th>
                    <th>Eliminar</th>
                </tr>
    HTML;

    $resultado = $Coche->mSelectGaraje();

    if ($resultado->num_rows > 1) {
        echo <<< HTML
            <tr>
                <td>No</td>
                <td>hay</td>
                <td>coches</td>
                <td>disponibles</td>
            </tr>
        HTML;
    } else {
        while ($registro = $resultado->fetch_assoc()) {
            echo <<< HTML
                <tr>
                    <td>$registro[marca]</td>
                    <td>$registro[modelo]</td>
                    <td>$registro[color]</td>
                    <td><a href="index.php?id_delete=$registro[id_coche]">🛒</a></td>
                </tr>
            HTML;
        }
    }

    $connDB = cDB::mDieDB();
    // if (!$connDB) echo('<script>alert("Sesion de la BD cerrada")</script>');
    
    echo('</table>');
    
    echo <<< HTML
        <button><a href="./assets/html/forms/agregarCoche.php">Agregar</a></button>
        <button><a href="./assets/html/forms/buscarCoche.php">Buscar</a></button>
        <button><a href="./assets/html/login/logout.php">Cerrar Sesión</a></button>
    </body>
    </html>
    HTML;
?>
<?php
    require_once('../../php/Coche.php');

    $Coche = new Coche();

    $resultado = null;
    if (isset($_GET['marca'])) {
        $resultado = $Coche->mSelectByMarca($_GET['marca']);
    }

    echo <<< HTML
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">

            <title>Buscar por marca</title>
        </head>
        <body>
            <form action="" method="GET">
                <h2>Buscar por marca</h2>
                
                <div>
                    <label for="marca">Marca:</label>
                    <input type="text" id="marca" name="marca" required>
                </div>

                <button type="submit">Buscar coche</button>
            </form>
            <table>
                <tr>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Color</th>
                </tr>
    HTML;

    if ($resultado !== null) {
        if ($resultado->num_rows == 0) {
            echo <<< HTML
                <tr>
                    <td>No</td>
                    <td>hay coches</td>
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
                </tr>
            HTML;
            }
        }
    }

    echo <<< HTML
            </table>
            <button><a href="../../../index.php">Volver al inicio</a></button>
        </body>
        </html>
    HTML;
?>
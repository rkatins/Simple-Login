<?php
    require_once('../../php/Coche.php');

    $Coche = new Coche();
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $Coche->mNewCoche($_POST['color'], $_POST['marca'], $_POST['modelo']);
        header("Location: ../../../index.php");
    }
    
    echo <<< HTML
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">

            <title>Agregar Nuevo Coche</title>
        </head>
        <body>
            <form action="" method="POST">
                <h2>Añadir Coche al Garaje</h2>

                <div>
                    <label for="color">Color:</label>
                    <input type="text" id="color" name="color" required>
                </div>
                
                <div>
                    <label for="marca">Marca:</label>
                    <input type="text" id="marca" name="marca" required>
                </div>

                <div>
                    <label for="modelo">Modelo:</label>
                    <input type="text" id="modelo" name="modelo" required>
                </div>

                <button type="submit">Agregar nuevo coche</button>
            </form>
        </body>
        </html>
    HTML;
?>
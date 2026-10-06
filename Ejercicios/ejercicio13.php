<?php
    $frutas = ["naranja", "manzana", "piña", "plátano", "pera"];
    $totalFrutas = count($frutas);

    $listaHTML = "<ul>";
    foreach ($frutas as $fruta) {
        $listaHTML .= "<li>" . $fruta . "</li>";
    }

    $listaHTML .= "</ul>";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13</title>
</head>
<body>
    <h1>Ejercicio 13</h1>
    <p><?= "Total frutas: " . $totalFrutas?></p>
        <?= $listaHTML?>
</body>
</html>
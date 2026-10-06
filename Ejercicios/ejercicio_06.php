<?php
    $numero = 7;

    if ($numero % 2 == 0){
        $resultado = "el número es par: " . " " . $numero;
    } else {
        $resultado = "el número es impar: ". " " . $numero;
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 06</title>
</head>
<body>
    <h1>Ejercicio 06</h1>
    <p>Resultado: <?= $resultado ?></p>
</body>
</html>
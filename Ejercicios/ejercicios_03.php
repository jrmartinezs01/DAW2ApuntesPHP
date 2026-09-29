<?php
    $cuentaPrimera = 5;
    $cuentaSegunda = 15;

    $suma = $cuentaPrimera + $cuentaSegunda;
    $resta = $cuentaPrimera - $cuentaSegunda;
    $multi = $cuentaPrimera * $cuentaSegunda;
    $divi = $cuentaSegunda / $cuentaPrimera;
    $resultado = ($cuentaPrimera > $cuentaSegunda) ? "Sí" : "No"; 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 03</title>
</head>
<body>
    <h1>Ejercicio 03</h1>
    <p>Número primero: <?= $cuentaPrimera ?></p>
    <p>Número segundo: <?= $cuentaSegunda ?></p>
    <p>Suma: <?= $suma ?></p>
    <p>Resta: <?= $resta ?></p>
    <p>Multiplicación: <?= $multi ?></p>
    <p>División: <?= $divi ?></p>
    <p>¿Es <?= $cuentaPrimera ?> mayor que <?= $cuentaSegunda ?>? = <?= $resultado ?></p>
</body>
</html>

<?php
function factorial($n) {
    if ($n < 0) {
        throw new Exception("El número no puede ser negativo");
    }
    if ($n > 20) {
        throw new Exception("El número no puede ser mayor que 20");
    }
    if ($n === 0 || $n === 1) {
        return 1;
    }
    return $n * factorial($n - 1);
}

try {
    $calculo = factorial(5);
} catch (Exception $e) {
    $mensaje = $e->getMessage();
}

try {
    $calculoError = factorial(-3);
} catch (Exception $e) {
    $mensajeError = $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 23</title>
</head>
<body>
    <h1>Ejercicio 23</h1>
    <p>Factorial de 5: <?= $calculo ?? $mensaje ?></p>
    <p>Factorial de -3: <?= $calculoError ?? $mensajeError ?></p>
</body>
</html>
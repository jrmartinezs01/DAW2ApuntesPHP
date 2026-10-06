<?php
    $enteros = [6, 9, 8, 5, 4, 3];
    $maximo = max($enteros);
    $minimo = min($enteros);

    $sumaTotal = array_sum($enteros);
    $cantidad = count($enteros);

    $media = $sumaTotal / $cantidad;
    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 15</title>
</head>
<body>
    <h1>Ejercicio 15</h1>
    <p>Máximo, minimo y media: <?= "Máximo: " . $maximo . " , " . "Mínimo: " . $minimo . " y " . "Media: " . $media?></p>

</body>
</html>
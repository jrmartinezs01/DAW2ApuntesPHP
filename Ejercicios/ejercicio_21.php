<?php
function intercambiar(&$a, &$b) {
    $aux = $a;
    $a = $b;
    $b = $aux;
}

$x = 10;
$y = 20;

intercambiar($x, $y);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 21</title>
</head>
<body>
    <h1>Ejercicio 21</h1>
    <p>X: <?= $x ?></p>
    <p>Y: <?= $y ?></p>
</body>
</html>
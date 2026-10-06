<?php
$contador = 0;

function incrementar() {
    global $contador;
    $contador++;
}

incrementar();
incrementar();
incrementar();

function contarLlamadas() {
    static $llamadas = 0;
    $llamadas++;
    return $llamadas;
}

$llamadas1 = contarLlamadas();
$llamadas2 = contarLlamadas();
$llamadas3 = contarLlamadas();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 19</title>
</head>
<body>
    <h1>Ejercicio 19</h1>
    <p>Valor final de $contador (global): <?= $contador ?></p>
    <p>Llamadas a contarLlamadas() (static): <?= $llamadas3 ?></p>
</body>
</html>
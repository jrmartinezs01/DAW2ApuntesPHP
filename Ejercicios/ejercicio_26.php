<?php
function sumar_traza($matriz) {
    $suma = 0;
    $filas = count($matriz);
    for ($i = 0; $i < $filas; $i++) {
        if (!isset($matriz[$i][$i]) || !is_numeric($matriz[$i][$i])) {
            throw new Exception("Elemento de la diagonal no numérico o fuera de rango");
        }
        $suma += $matriz[$i][$i];
    }
    return $suma;
}

$matrizValida = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

try {
    $traza = sumar_traza($matrizValida);
} catch (Exception $e) {
    $errorTraza = $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 26</title>
</head>
<body>
    <h1>Ejercicio 26</h1>
    <p>Suma de la diagonal principal: <?= $traza ?? $errorTraza ?></p>
</body>
</html>
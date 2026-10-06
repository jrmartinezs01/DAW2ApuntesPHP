<?php
function extraer($matriz, $coordenadas) {
    $fInicio = $coordenadas[0][0];
    $cInicio = $coordenadas[0][1];
    $fFin = $coordenadas[1][0];
    $cFin = $coordenadas[1][1];

    $totalFilas = count($matriz);
    $totalColumnas = count($matriz[0]);

    if (
        $fInicio < 0 || $fFin >= $totalFilas || $fInicio > $fFin ||
        $cInicio < 0 || $cFin >= $totalColumnas || $cInicio > $cFin
    ) {
        throw new Exception("Coordenadas fuera de rango o inválidas");
    }

    $submatriz = [];
    for ($i = $fInicio; $i <= $fFin; $i++) {
        $fila = [];
        for ($j = $cInicio; $j <= $cFin; $j++) {
            $fila[] = $matriz[$i][$j];
        }
        $submatriz[] = $fila;
    }

    return $submatriz;
}

$matrizCompleta = [
    [10, 11, 12, 13, 14],
    [20, 21, 22, 23, 24],
    [30, 31, 32, 33, 34],
    [40, 41, 42, 43, 44]
];

$coordenadas = [[0, 2], [2, 4]];

try {
    $submatriz = extraer($matrizCompleta, $coordenadas);
} catch (Exception $e) {
    $errorSub = $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 28</title>
</head>
<body>
    <h1>Ejercicio 28</h1>
    <table border="1">
        <?php foreach ($submatriz as $fila): ?>
            <tr>
                <?php foreach ($fila as $val): ?>
                    <td><?= $val ?></td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
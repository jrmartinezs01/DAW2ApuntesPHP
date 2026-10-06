<?php
function totalizar($matriz) {
    $resultado = [];
    $numFilas = count($matriz);
    $numColumnas = count($matriz[0]);
    $sumasColumnas = array_fill(0, $numColumnas, 0);

    for ($i = 0; $i < $numFilas; $i++) {
        $sumaFila = 0;
        $filaTemp = [];
        for ($j = 0; $j < $numColumnas; $j++) {
            if (!is_numeric($matriz[$i][$j])) {
                throw new Exception("Elemento no numérico detectado");
            }
            $valor = $matriz[$i][$j];
            $sumaFila += $valor;
            $sumasColumnas[$j] += $valor;
            $filaTemp[] = $valor;
        }
        $filaTemp[] = $sumaFila;
        $resultado[] = $filaTemp;
    }

    $sumasColumnas[] = array_sum($sumasColumnas);
    $resultado[] = $sumasColumnas;

    return $resultado;
}

$matrizOriginal = [
    [1, 2, 3],
    [4, 5, 6]
];

try {
    $matrizTotalizada = totalizar($matrizOriginal);
} catch (Exception $e) {
    $errorTotalizar = $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 27</title>
</head>
<body>
    <h1>Ejercicio 27</h1>
    <table border="1">
        <?php foreach ($matrizTotalizada as $fila): ?>
            <tr>
                <?php foreach ($fila as $val): ?>
                    <td><?= $val ?></td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
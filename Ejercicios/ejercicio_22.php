<?php
function estadisticas(array $numeros) {
    if (empty($numeros)) {
        throw new Exception("El array no puede estar vacío");
    }

    $suma = array_sum($numeros);
    $media = $suma / count($numeros);

    return [
        "minimo" => min($numeros),
        "maximo" => max($numeros),
        "suma"   => $suma,
        "media"  => $media
    ];
}

try {
    $valores = [4, 8, 15, 16, 23, 42];
    $resultado = estadisticas($valores);
} catch (Exception $e) {
    $error = $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 22</title>
</head>
<body>
    <h1>Ejercicio 22</h1>
    <?php if (isset($error)): ?>
        <p>Error: <?= $error ?></p>
    <?php else: ?>
        <p>Mínimo: <?= $resultado["minimo"] ?></p>
        <p>Máximo: <?= $resultado["maximo"] ?></p>
        <p>Suma: <?= $resultado["suma"] ?></p>
        <p>Media: <?= $resultado["media"] ?></p>
    <?php endif; ?>
</body>
</html>
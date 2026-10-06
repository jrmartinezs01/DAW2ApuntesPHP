<?php
require 'datos.php';

function obtenerMasCaro($lista) {
    $masCaro = $lista[0];
    foreach ($lista as $prod) {
        if ($prod["precio"] > $masCaro["precio"]) {
            $masCaro = $prod;
        }
    }
    return $masCaro;
}

function obtenerMasBarato($lista) {
    $masBarato = $lista[0];
    foreach ($lista as $prod) {
        if ($prod["precio"] < $masBarato["precio"]) {
            $masBarato = $prod;
        }
    }
    return $masBarato;
}

$valorTotal = 0;
$porCategoria = [];

foreach ($productos as $prod) {
    $valorTotal += $prod["precio"] * $prod["stock"];
    $porCategoria[$prod["categoria"]][] = $prod["nombre"];
}

$productoCaro = obtenerMasCaro($productos);
$productoBarato = obtenerMasBarato($productos);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 20</title>
</head>
<body>
    <h1>Informe de Inventario</h1>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Categoría</th>
            <th>Estado</th>
        </tr>
        <?php foreach ($productos as $p): ?>
        <tr>
            <td><?= $p["nombre"] ?></td>
            <td><?= $p["precio"] ?> €</td>
            <td><?= $p["stock"] ?></td>
            <td><?= $p["categoria"] ?></td>
            <td><?= ($p["stock"] == 0) ? "Agotado" : "Disponible" ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <p><strong>Valor total del inventario:</strong> <?= $valorTotal ?> €</p>
    <p><strong>Producto más caro:</strong> <?= $productoCaro["nombre"] ?> (<?= $productoCaro["precio"] ?> €)</p>
    <p><strong>Producto más barato:</strong> <?= $productoBarato["nombre"] ?> (<?= $productoBarato["precio"] ?> €)</p>

    <h2>Productos por categoría</h2>
    <ul>
        <?php foreach ($porCategoria as $cat => $items): ?>
            <li><strong><?= $cat ?>:</strong> <?= implode(", ", $items) ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
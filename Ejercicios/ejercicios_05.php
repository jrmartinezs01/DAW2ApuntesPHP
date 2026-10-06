<?php

$iva = 1.21;

$productoSin = 535;
$productoCon = $productoSin * $iva;
$productoSinIVA = $productoCon / $iva;


?>
<!DOCTYPE html>
<html lang="es">
<meta charset="UTF-8">
<meta name="viewport" content='width=device=width, initial-scale=1.0'>
<title> Ejercio 05</title>

<head>
</head>

<body>
    <h1> Ejercicio 05 </h1>
    <p> Producto Original <?= $productoSin ?> </p>
    <p> Producto Con IVA <?= $productoCon ?> </p>
    <p> Producto Sin IVA <?= $productoSinIVA ?> </p>
</body>

</html>
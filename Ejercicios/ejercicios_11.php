<?php
$entero = 20;
$par = "";

for ($i = 0; $i <= $entero; $i++) {

    if ($i % 2 != 0) {
        continue;
    }

    $par .= $i . ", ";
}
?>


<!DOCTYPE html>
<html lang="es">
<meta charset="UTF-8">
<meta name="viewport" content='width=device=width, initial-scale=1.0'>
<title> Ejercio 11</title>

<head>
</head>

<body>
    <h1> Ejercicio 11</h1>
    <p> <?= $par ?> </p>
</body>

</html>
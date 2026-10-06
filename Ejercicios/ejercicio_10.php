<?php
$suma = 0;
$sumaPrueba = 0;
$i = 1;

while ($i <= 100) {
    $suma += $i;
    $i++;
}

for ($j = 1; $j <= 100; $j++) {
    $sumaPrueba += $j;
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio XX</title>
</head>

<body>
    <h1>Ejercicio XX</h1>
    <p>Resultado:
        <?= "While: " . $suma . " y " . "For: " . $sumaPrueba ?>
    </p>
</body>

</html>
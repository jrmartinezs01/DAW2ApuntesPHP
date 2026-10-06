<?php

$nota = 7;

if ($nota < 5) {
    $resultado = "insuficiente" . $nota . "";
} elseif ($nota <= 6) {
    $resultado = "suficiente" . $nota . "";
} elseif ($nota <= 8) {
    $resultado = "notable" . $nota . "";
} elseif ($nota <= 10) {
    $resultado = "sobresaliente" . $nota . "";
}

switch ($nota) {
    case ($nota < 5):
        $resultado = "Insuficiente";
        break;
    case ($nota === 5):
        $resultado = "Suficiente";
        break;
    case ($nota === 6):
        $resultado = "Bien";
        break;
    case ($nota > 6 && $nota < 9):
        $resultado = "Notable";
        break;
    case ($nota > 8):
        $resultado = "Sobresaliente";
        break;

}


$resultado = match ($nota) {
    0, 2, 3, 4 => "Insuficiente",
    5 => "Suficiente",
    6 => "Bien",
    7, 8 => "Notable",
    9, 10 => "Sobresaliente",
};

?>
<!DOCTYPE html>
<html lang="es">
<meta charset="UTF-8">
<meta name="viewport" content='width=device=width, initial-scale=1.0'>
<title> Ejercio XX</title>

<head>
</head>

<body>
    <h1> Ejercicio XX</h1>
</body>

</html>
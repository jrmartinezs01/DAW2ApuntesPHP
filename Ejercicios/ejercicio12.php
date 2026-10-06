<?php
    $contador = 10;
    $cuentaAtras = "";
    do{
        $cuentaAtras .= $contador . "<br>";
        $contador--;
    } while($contador > 0);

    $cuentaAtras .= "<strong>Despegue!!!!!!!!!</strong>"
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12</title>
</head>
<body>
    <h1>Ejercicio 12</h1>
    <p> <?=$cuentaAtras?> </p>
</body>
</html>
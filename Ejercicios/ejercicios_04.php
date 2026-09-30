<?php

    $numeroEnt = "123";
    $numero = "3.14";
    $cadena = "abc";

    // Casting 

    $convertido = (int) $numeroEnt;
    $convertidoF = (float) $numero;

    // Directamente convierte a 0 
    
    $convertidoStr = (int) $cadena;

?>
<!DOCTYPE html>
<html lang="es">
    <meta charset="UTF-8">
    <meta name="viewport" content='width=device=width, initial-scale=1.0'>
    <title> Ejercio 04</title>
<head>
</head>
    <body>
        <h1> Ejercicio 04 </h1>
        <p> Cadena a INT: <?= $convertido ?> </p>
        <p> Cadeana a Float: <?= $convertidoF ?> </p>
        <p> String a ¿INT?: <?= $convertidoStr ?> </p>
    </body>
</html>
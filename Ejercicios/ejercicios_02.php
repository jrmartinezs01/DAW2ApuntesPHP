<?php
    $nombre = 'JuanRa';
    $edad = 22;
    $altura = 1.80;
    $esAlumno = true;
    
?>
<!DOCTYPE html>
<html lang="es">
    <meta charset="UTF-8">
    <meta name="viewport" content='width=device=width, initial-scale=1.0'>
    <title> Ejercio 02</title>
<head>
</head>
    <body>
        <h1> Ejercicio 02</h1>
        <ul>
            <li>Nombre: <?= var_dump($nombre) ?> </li>
            <li>Edad: <?=  var_dump($edad) ?> </li>
            <li> Altura: <?= var_dump($altura) ?> </li>
            <li> ¿Es Alumno? <?= var_dump($esAlumno) ?> </li>
        </ul> 
    </body>
</html>

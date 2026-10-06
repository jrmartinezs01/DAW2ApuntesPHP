<?php
    $alumno = [
    "nombre" => "Ana",
    "edad" => 20,
    "ciclo" => "DAW",
    "nota media" => "6"
    ];
    $tablaHTML = "<table>";
    foreach ($alumno as $indice => $valor){
        // 1. Abrimos la fila
        $tablaHTML .= "<tr>";
        
        // 2. Metemos la clave en la primera columna
        $tablaHTML .= "<td>" . $indice . "</td>";
        
        // 3. Metemos el valor en la segunda columna
        $tablaHTML .= "<td>" . $valor . "</td>";
        
        // 4. Cerramos la fila
        $tablaHTML .= "</tr>";
    }

    $tablaHTML .= "</table>";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 14</title>
</head>
<body>
    <h1>Datos del alumno</h1>
    <?=$tablaHTML?>
</body>
</html>
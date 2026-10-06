<?php
    $alumnos = [
        ["nombre" => "Nathan", "edad" => 16, "nota" => 8],
        ["nombre" => "Luck", "edad" => 17, "nota" => 7],
        ["nombre" => "Mark", "edad" => 16, "nota" => 9]
    ];
    $tablaHTML = "<table>";
    $tablaHTML .= "<tr> <th>Nombre</th> <th>Edad</th> <th>Nota</th> </tr>";
    foreach ($alumnos as $y => $fila){
        $tablaHTML .= "<tr>";
            foreach($fila as $x => $valor){
                $tablaHTML .= "<td>" . $valor . "</td>";
            }
        $tablaHTML .= "</tr>";
    }
    $tablaHTML .= "</table>";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 16</title>
</head>
<body>
    <h1>Ejercicio 16</h1>
    <?= $tablaHTML ?>
</body>
</html>
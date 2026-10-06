<?php
$numero = 3;
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 09</title>
</head>

<body>
    <h1>Ejercicio 09</h1>
    <table>
            <?php
            for ($i = 1; $i <= 10; $i++) {
                $resultado = $numero * $i;

                echo "<tr>";
                echo "<td>" . $numero . " x " . $i . " = " . $resultado . "</td>";
                echo "</tr>";
            }
            ?>
    </table>
</body>

</html>
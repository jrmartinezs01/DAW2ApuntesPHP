<?php
class ErrorDeValidacion extends Exception {}

function validarAlumno($nombre, $edad, $nota) {
    if (empty(trim($nombre))) {
        throw new ErrorDeValidacion("El nombre no puede estar vacío");
    }
    if ($edad < 0 || $edad > 120) {
        throw new ErrorDeValidacion("La edad debe estar entre 0 y 120");
    }
    if ($nota < 0 || $nota > 10) {
        throw new ErrorDeValidacion("La nota debe estar entre 0 y 10");
    }
    return true;
}

$pruebas = [
    ["Juan", 20, 8.5],
    ["", 22, 7],
    ["Pedro", 130, 6],
    ["Ana", 19, 11]
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 24</title>
</head>
<body>
    <h1>Ejercicio 24</h1>
    <ul>
        <?php foreach ($pruebas as $p): ?>
            <?php
            try {
                validarAlumno($p[0], $p[1], $p[2]);
                $salida = "Alumno " . $p[0] . " válido";
            } catch (ErrorDeValidacion $e) {
                $salida = "Error: " . $e->getMessage();
            }
            ?>
            <li><?= $salida ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
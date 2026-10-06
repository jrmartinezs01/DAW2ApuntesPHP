<?php
function leerArchivo($ruta) {
    $archivo = false;
    $lineas = [];
    try {
        if (!file_exists($ruta)) {
            throw new Exception("El archivo no existe: $ruta");
        }
        $archivo = fopen($ruta, "r");
        while (($linea = fgets($archivo)) !== false) {
            $lineas[] = $linea;
        }
        return $lineas;
    } finally {
        if ($archivo) {
            fclose($archivo);
        }
    }
}

file_put_contents("prueba.txt", "Línea 1\nLínea 2\nLínea 3");

try {
    $contenido1 = leerArchivo("prueba.txt");
} catch (Exception $e) {
    $error1 = $e->getMessage();
}

try {
    $contenido2 = leerArchivo("inexistente.txt");
} catch (Exception $e) {
    $error2 = $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 25</title>
</head>
<body>
    <h1>Ejercicio 25</h1>
    <h2>Archivo existente:</h2>
    <pre><?= isset($contenido1) ? implode("", $contenido1) : $error1 ?></pre>

    <h2>Archivo no existente:</h2>
    <p><?= $error2 ?? "" ?></p>
</body>
</html>
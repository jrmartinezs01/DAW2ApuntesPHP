<?php
    function saludar($nombre = "visitante"){
        return "Hola, $nombre";
    }
    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 17</title>
</head>
<body>
    <h1>Ejercicio 17</h1>
    <ul>
        <li><?= saludar("Ana") ?></li>
        <li><?= saludar("Lucas") ?></li>
        <li><?= saludar("Roberto") ?></li>
        <li><?= saludar() ?></li>
    </ul>
</body>
</html>
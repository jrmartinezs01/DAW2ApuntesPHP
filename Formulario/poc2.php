<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['poc2'])) {
    require('poc1.php');
    die;
}
    var_dump($_POST);
}
$datos = []
$dato[1] = htmlspecialchars($_POST['dato1'] ?? '');
$dato[2] = htmlspecialchars($_POST['dato2'] ?? '');
$dato3[3] = htmlspecialchars($_POST['dato3'] ?? '');
$json_datos = json_encode($datos);

?>
<!DOCTYPE html>
<html lang="es">
    <meta charset="UTF-8">
    <meta name="viewport" content='width=device=width, initial-scale=1.0'>
    <meta name=author content='Juan Ramón Martínez <jrmartinezs01@educarex.es>'/>
    <title>Prueba de Concepto de Formularios</title>
<head>
</head>
    <body>
        <h1>Página 2</h1>
        <form method=POST>
            <label for=dato2>Dato2:  </label><input name=dato2 placeholder='Dato 2' value='<?=$dato[2] ?>' />
            <br>
            <button name=poc2> Enviar </button>
            <input type=hidden name=dato1 value='<?= $json_datos ?>' />
        </form>
    </body>
</html>
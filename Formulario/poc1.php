<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['poc1'])) {
    require('poc2.php');
    die;
    }
    var_dump($_POST);
}
$dato1 = htmlspecialchars($_POST['dato1'] ?? '');
$dato2 = htmlspecialchars($_POST['dato2'] ?? '');
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
        <h1>Página 1</h1>
        <form method=POST>
            <label for=dato1>Dato1:  </label><input name=dato1 placeholder='Dato 1' value='<?= $dato1 ?>' />
            <br />
            <label for=dato3>Dato3: </label>
            <select name=dato3>
                <option value='badajoz'>Badajoz</option>
                <option value='caceres'>Cáceres</option>
            </select>
            <br /> 
            <button name=poc1>Enviar</button>
            <input type=hidden name=dato2 value='<?= $dato2 ?>' />
        </form>
    </body>
</html>

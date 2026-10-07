<?php
    var_dump($_POST);
    if ($_SERVER ['REQUEST_METHOD'] === 'POST'){
        if (isset($_POST['numero1 && numero2'])){

            
            //echo 'La suma es igual '.htmlspecialchars($_POST['numero1 + numero2']);


            die;
        }
    }

?>
<!DOCTYPE html>
<html lang="es">
    <meta charset="UTF-8">
    <meta name="viewport" content='width=device=width, initial-scale=1.0'>
    <title> Ejercio 03</title>
<head>
</head>
    <body>
        <h1> Ejercicio 03</h1>
        <form method=POST>
            <label for=numero1>Campo 1:  </label><input type="number" name=numero1 />
            <p> + </p>
            <label for=numero2>Campo 2:  </label><input type="number" name=numero2/>
            <br />
            <button>Enviar</button>
            
    </body>
</html>
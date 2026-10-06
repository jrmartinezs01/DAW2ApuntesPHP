<?php
    function esPar($numero){
        if($numero % 2 === 0){
            return true;
        }else{
            return false;
        }
    }

    function factorial($numero){
        $resultado = 1;
        for($i = 1; $i <= $numero; $i++){
            $resultado *= $i;
        }
        return resultado;
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 18</title>
</head>
<body>
    <h1>Ejercicio 18</h1>
   
</body>
</html>
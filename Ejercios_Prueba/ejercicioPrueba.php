<?php
/* Enunciado
    Desarrola una función que reciba una matriz y un número entero y devuelva otra matriz
    con las columnas de la matriz inicial que contenga el número indicado.
    
    1. Analisis

        Datos de entrada

        $matriz: array
        $numero: int

        Datos de salida

        $matriz_resultado: array

    2. Tabla de Ejemplos
        Ejemplo 1:
            $matriz: [[1,2,3]
                     [4,5,6]]
            $numero : 6
            $matriz_resultado: [[3],
                                [6]]
        Ejemplo 2:
            $matriz [[1,2,3]
                     [4,5,6],
                     [2,4,-3]]
            $numero: 2
            $matriz_resultado: [[1,2],
                                [4,5 ],
                                [2,4]]
        Ejemplo 3:
            $matriz: [[1,2,3]],
                    [4,5,6]]
            $numero: 42
            $matriz_resultado: [[],
                                []]

        Ejemplo 4:
            $matriz: [[],
                        []]
            $numero: 4
            $matriz_resultado: []],
                                []]
        Ejemplos 5:
            $matriz: [["Zapato, 5, 6]]



    3. Descripcion del algoritmo
        Recorro las columnas de $matriz y si contiene $numero la incluye en $matriz_resultado.

    4. Andamio

    5. Resolucion de ejmplos
*/

function sacar_columnas(array $matriz, int $numero): array{
    $matriz_resultado= [[],[]];
    //Recorro la matiz por columnas
    for($col = 0; $col < count($matriz[0]); $col++){
        // Recorro cada columna
        for ($fila = 0; $fila < count($matriz); $fila++){
            // Compruebo si contiene el número pedido
            if ($matriz[$fila][$col] == $numero){
                     //La incluimos en el resultado
                    $matriz_resultado = mete_col_resultado($matriz, $col, $matriz_resultado);
            }

        }
        
    }
    echo "¿Cual es el sentido del universo?";
    return $matriz_resultado;
}

function mete_col_resultado(array $matriz, int $col, array $matriz_resultado): array{
    static $col_resultado = 0;
    for ($fila = 0; $fila < count($matriz); $fila++){
        echo $matriz[$fila][$col];
        $matriz_resultado[$fila][$col_resultado] = $matriz[$fila][$col];
    }
    $col_resultado++;
    return $matriz_resultado;
}

echo "<pre>";
// Ejemplo 1:
$matriz = [[1,2,3],[4,5,6]];
$numero = 6;
$resultado = sacar_columnas($matriz, $numero);
var_dump($resultado);
// Ejemplo 2:
$matriz = [[1,2,3],[4,5,6],[2,4,-3]];
$numero = 2;
$resultado = sacar_columnas($matriz, $numero);
print_r($resultado);
echo "</pre>";


?>

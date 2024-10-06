<?php
/*
Generar una matriz de 3x4 y generar un vector que contenga los valores máximos
de cada fila y otro que contenga los promedios de los mismos. Imprimir ambos
vectores a razón de uno por renglón
*/


$matriz = array();
$maximos = array();
$promedios = array();

echo "Matriz entera:" . "</br>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 4; $j++) {
        $matriz[$i][$j] = rand(1, 100); 
        echo $matriz[$i][$j] . "   ";
    }
    echo "</br>";
}

// Calcular el máximo de cada fila y el promedio
for ($i = 0; $i < 3; $i++) {
    $max = $matriz[$i][0]; 
    $suma = 0;

    for ($j = 0; $j < 4; $j++) {
        if ($matriz[$i][$j] > $max) {
            $max = $matriz[$i][$j];
        }
        $suma += $matriz[$i][$j];
    }

    $maximos[$i] = $max;
    $promedios[$i] = $suma / 4; // Promedio de la fila
}

// Imprimir los máximos
echo "Máximo de cada fila de la matriz:" . "</br>";
foreach ($maximos as $max) {
    echo $max . "</br>";
}

// Imprimir los promedios
echo "Promedio de cada fila de la matriz:" . "</br>";
foreach ($promedios as $promedio) {
    echo $promedio . "</br>";
}

?>

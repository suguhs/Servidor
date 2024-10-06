<?php
/*
Llenar una matriz de 20x20 con valores aleatorios. Sumar las columnas e
imprimir la columna que tuvo la máxima suma y la suma de esa columna.
*/

$array=array();
$suma=array();

//Rellenar la matriz
for ($i = 0; $i < 20; $i++) {
    for ($j = 0; $j < 20; $j++) {
        $matriz[$i][$j] = rand(1, 100); 
        echo $matriz[$i][$j]."   ";
}

    }

for ($j = 0; $j < 20; $j++) {
    $sumaColumnas[$j] = 0;
}

// Sumar los valores de cada columna
for ($i = 0; $i < 20; $i++) {
    for ($j = 0; $j < 20; $j++) {
        $sumaColumnas[$j] += $matriz[$i][$j];  // Sumar el valor de la columna $j
    }
}

// Encontrar la columna con la máxima suma
$colMax = 0;  
$maxSuma = $sumaColumnas[0];  

for ($j = 1; $j < 20; $j++) {
    if ($sumaColumnas[$j] > $maxSuma) {
        $maxSuma = $sumaColumnas[$j];
        $colMax = $j;
    }
}


echo "</br>La columna con la máxima suma es la columna " . ($colMax + 1) . " con una suma de " . $maxSuma . ".";
?>
?>
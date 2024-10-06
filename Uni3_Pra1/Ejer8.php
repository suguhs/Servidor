<?php
/*
Hacer un algoritmo que llene una matriz de 10x10 con valores aleatorios y
determine la posición [fila, columna] del número mayor almacenado en la matriz. 
*/


$max=0;
$fil=0;
$col=0;

$matriz = array(); 


echo "Matriz entera" . "</br>";
for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {
        $matriz[$i][$j] = rand(1, 100); 
        echo $matriz[$i][$j]."   ";
}
echo "</br>";
    }

echo "Maximo de la matriz: " . "</br>";
for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {
        if($matriz[$i][$j]>$max){
            $max=$matriz[$i][$j];
            $fil=$i;
            $col=$j;
        }
    }
   
}

echo "El mayor valor es " . $max ." fila: ". $fil ." columna: ".$col;
?>
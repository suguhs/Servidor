<?php
/*
Generar de forma aleatoria una matriz de 4*5 con valores numéricos, determinar
fila y columna del elemento mayor.

*/



$max=0;
$fil=0;
$col=0;

$matriz = array(); 


echo "Matriz entera" . "</br>";
for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < 5; $j++) {
        $matriz[$i][$j] = rand(1, 100); 
        echo $matriz[$i][$j]."   ";
}
echo "</br>";
    }

echo "Maximo de la matriz: " . "</br>";
for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < 5; $j++) {
        if($matriz[$i][$j]>$max){
            $max=$matriz[$i][$j];
            $fil=$i;
            $col=$j;
        }
    }
   
}

echo "El mayor valor es " . $max ." fila: ". $fil ." columna: ".$col;

?>
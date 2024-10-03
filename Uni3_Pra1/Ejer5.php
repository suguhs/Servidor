<?php
/*

Generar de forma aleatoria una matriz de 3x5 con valores numéricos.
a. Imprimir todos los elementos en forma sucesiva tomándolos por fila.
b. Igual al anterior pero por columna.

*/

$filas = 3;
$columnas = 5;


$matriz = array(); 


echo "Matriz entera" . "</br>";
for ($i = 0; $i < $filas; $i++) {
    for ($j = 0; $j < $columnas; $j++) {
        $matriz[$i][$j] = rand(1, 100); 
        echo $matriz[$i][$j]."   ";
}
echo "</br>";
    }
    

// a.
echo "Elementos de la matriz por fila:<br>";
for ($i = 0; $i < $filas; $i++) {
    for ($j = 0; $j < $columnas; $j++) {
        echo $matriz[$i][$j] . " "; 
    echo " "; 
}
}

// b. 
echo "<br>Elementos de la matriz por columna:<br>";
for ($j = 0; $j < $columnas; $j++) {
    for ($i = 0; $i < $filas; $i++) {
        echo $matriz[$i][$j] . " "; 
    } 
}
?>
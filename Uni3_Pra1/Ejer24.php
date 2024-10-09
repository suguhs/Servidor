<?php
/* 
   Crea un array llamado deportes e introduce los siguientes valores: fútbol,
   baloncesto, natación, tenis. Haz el recorrido de la matriz con un foreach 
   para mostrar sus valores. Luego, realiza las siguientes operaciones:
    - Muestra el total de valores que contiene.
    - Sitúa el puntero en el primer elemento del array y muestra el valor actual.
    - Avanza una posición y muestra el valor actual.
    - Coloca el puntero en la última posición y muestra su valor.
    - Retrocede una posición y muestra este valor.
*/

$deportes = ['fútbol', 'baloncesto', 'natación', 'tenis'];


foreach ($deportes as $valor) {
    echo "$valor<br>";
}


echo "El array tiene " . count($deportes) . " valores<br>";


$valorActual = current($deportes);
echo "Primer valor del array es '$valorActual'<br>";


$valorActual = next($deportes);
echo "El siguiente valor del array es '$valorActual'<br>";


$valorActual = end($deportes);
echo "El último valor del array es '$valorActual'<br>";


$valorActual = prev($deportes);
echo "El penúltimo valor del array es '$valorActual'<br>";
?>

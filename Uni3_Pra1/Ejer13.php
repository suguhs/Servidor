<?php

/* Crea un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York,
Los Ángeles y Chicago, sin asignar índices al array. A continuación, muestra el
contenido del array haciendo un recorrido diciendo el valor correspondiente a
cada índice, ejemplo:
La ciudad con el índice 1 tiene el nombre de Barcelona.*/

// Crea un array con las ciudades
$ciudades = ['Madrid', 'Barcelona', 'Londres', 'New York', 'Los Ángeles', 'Chicago'];

// Recorre el array y muestra el índice y el valor correspondiente
for ($i = 0; $i < count($ciudades); $i++) {
    echo "La ciudad con el índice $i tiene el nombre de " . $ciudades[$i] . "<br>";
}
?>

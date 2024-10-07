<?php
/* Muestra el array del ejercicio anterior pero en orden inverso */

$animales = array("Lagartija", "Araña", "Perro", "Gato", "Ratón");
$num = array(12, 34, 45, 52, 12);
$arboles = array("Sauce", "Pino", "Naranjo", "Chopo", "Perro", "34");


print_r($animales); echo "<br>";
print_r($num); echo "<br>";
print_r($arboles); echo "<br>";


$todos = array();
echo "<br>Fusión de los arrays anteriores:<br>";

foreach ($animales as $valor) {
    array_push($todos, $valor);
}
foreach ($num as $valor) {
    array_push($todos, $valor);
}
foreach ($arboles as $valor) {
    array_push($todos, $valor);
}


print_r($todos); echo "<br>";

echo "Array revertido con la función array_reverse:<br>";
$todos_r = array_reverse($todos);
print_r($todos_r);
?>

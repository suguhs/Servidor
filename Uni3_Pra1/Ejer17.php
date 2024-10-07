<?php
/*
Rellena los siguientes tres arrays y júntalos en uno nuevo. Muéstralos por
pantalla. Utiliza la función array_merge()
*/

$animales=array("Lagartija","Araña","Perro","Gato","Ratón");
$num=array(12,34,45,52,12);
$arboles=array("Sauce","Pino","Naranjo","Chopo","Perro","34");

print_r($animales);echo "<br>";
print_r($num);echo "<br>";
print_r($arboles);echo "<br>";

$todos=array_merge($animales,$num,$arboles);
print_r($todos);

?>
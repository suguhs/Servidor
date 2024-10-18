<?php
require_once 'ejer6.php';

$coche = new Coche("verde", 2100, 4, 2);
$coche->añadir_cadenas_nieve(2);
$coche->añadir_persona(80);
$coche->repintar("azul");
$coche->quitar_cadenas_nieve(4);
$coche->repintar("negro");
Vehiculo::ver_atributo($coche);
echo "Número de veces que se cambió el color: " . Vehiculo::getNumeroCambioColor() . Vehiculo::SALTO_DE_LINEA;

?>

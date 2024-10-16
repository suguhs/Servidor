<?php
include("Ejer4.php");
// 1. 
$coche = new Coche("Verde", 1400, 4);
$coche->añadir_persona(65);
$coche->añadir_persona(65);
echo "Color del coche: " . $coche->getColor() . "\n";
echo "Peso del coche tras añadir las personas: " . $coche->getPeso() . " kg\n";

// 2. 
$coche->repintar("Rojo");
$coche->añadir_cadenas_nieve(2);
echo "Color del coche: " . $coche->getColor() . "\n";
echo "Número de cadenas de nieve: " . $coche->getNumeroCadenasNieve() . "\n";

// 3. 
$dos_ruedas = new Dos_Ruedas("Negro", 120, 500);
$dos_ruedas->añadir_persona(80);
$dos_ruedas->poner_gasolina(20);
echo "Color de dos ruedas: " . $dos_ruedas->getColor() . "\n";
echo "Peso de dos ruedas: " . $dos_ruedas->getPeso() . " kg\n";

// 4. 
$camion = new Camion("Azul", 10000, 2, 10);
$camion->añadir_remolque(5);
$camion->añadir_persona(80);
echo "Color del camión: " . $camion->getColor() . "\n";
echo "Peso del camión: " . $camion->getPeso() . " kg\n";
echo "Longitud del camión: " . $camion->getLongitud() . " metros\n";
echo "Número de puertas del camión: " . $camion->getNumeroPuertas() . "\n";

?>
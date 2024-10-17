<?php
require_once 'Ejer5.php';

// 1. Modificaciones con objeto Dos ruedas 
$dos_ruedas = new Dos_Ruedas('Rojo', 150, 500);  
$dos_ruedas->añadir_persona(70);
$dos_ruedas->repintar('Verde');
$dos_ruedas = new Dos_Ruedas('Verde', $dos_ruedas->getPeso(), 1000);
echo "Atributos de Dos Ruedas:\n";
$dos_ruedas->ver_atributo($dos_ruedas);

echo "</br>"; 

// 2. Modificaciones con Obejeto de Camion
$camion = new Camion('Blanco', 6000, 2, 10); 
$camion->añadir_persona(84);
$camion->repintar('Azul');
echo "Atributos del Camión:\n";
$camion->ver_atributo($camion);

?>

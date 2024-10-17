<?php
// Incluimos el archivo que contiene las clases
require_once 'Ejer5.php';

// 1. Crear un objeto de la clase Dos_Ruedas rojo de 150 kg
$dos_ruedas = new Dos_Ruedas('Rojo', 150, 500);  

// 2. Añadir una persona de 70 kg y mostrar el peso total
$dos_ruedas->añadir_persona(70);

// 3. Cambiar el color a verde
$dos_ruedas->repintar('Verde');

// 4. Incluir una cilindrada de 1000
$dos_ruedas = new Dos_Ruedas('Verde', $dos_ruedas->getPeso(), 1000);

// 5. Mostrar todos los valores de los atributos de dos ruedas con la función ver_atributo
echo "Atributos de Dos Ruedas:\n";
$dos_ruedas->ver_atributo();

echo "\n"; 

// 6. Crear un camión blanco de 6000 kg
$camion = new Camion('Blanco', 6000, 2, 10);  // número de puertas y longitud inicial

// 7. Añadir una persona de 84 kg
$camion->añadir_persona(84);

// 8. Cambiar el color del camión a azul
$camion->repintar('Azul');

// 9. Mostrar todos los valores de los atributos del camión con la función ver_atributo
echo "Atributos del Camión:\n";
$camion->ver_atributo();

?>

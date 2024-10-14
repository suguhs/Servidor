<?php

// Funciones de variables
$var1 = "Hola, mundo!";
$var2 = null;
$var3 = false;


echo "=== Funciones de Variables ===\n";

// 1. isset()
if (isset($var1)) {
    echo "La variable var1 está inicializada.\n";
} else {
    echo "La variable var1 NO está inicializada.\n";
}

// 2. is_null()
if (is_null($var2)) {
    echo "La variable var2 ES NULL.\n";
} else {
    echo "La variable var2 NO es NULL.\n";
}

// 3. is_bool()
if (is_bool($var3)) {
    echo "La variable var3 es de tipo booleano.\n";
} else {
    echo "La variable var3 NO es de tipo booleano.\n";
}

// Funciones de cadenas
$caden1 = "Hola, mundo!";
$caden2 = "¿Cómo estás?";
$caden3 = "Esto es una prueba.";

// Comprobando cadenas
echo "\n=== Funciones de Cadenas ===\n";

// 1. strlen()
$longitud = strlen($caden1);
echo "La longitud de la cadena 1 es: $longitud\n";

// 2. strpos()
$posicion = strpos($caden1, "mundo");
if ($posicion !== false) {
    echo "La palabra 'mundo' se encuentra en la posición: $posicion\n";
} else {
    echo "La palabra 'mundo' NO se encontró en la cadena.\n";
}

// 3. implode()
$arrayCadena = explode(" ", $caden2);
$cadenUnida = implode(", ", $arrayCadena);
echo "La cadena unida de la cadena 2 es: $cadenUnida\n";

// Funciones de arrays
$array = [3, 1, 4, 1, 5, 9, 2, 6, 5];

// Comprobando arrays
echo "\n=== Funciones de Arrays ===\n";

// 1. sort()
sort($array);
echo "Array ordenado en orden ascendente: ";
print_r($array);

// 2. count()
$contador = count($array);
echo "El número de elementos en el array es: $contador\n";

// 3. array_keys()
$claves = array_keys($array);
echo "Las claves del array son: ";
print_r($claves);

?>

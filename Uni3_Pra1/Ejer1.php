<?php
/*
Realizar los siguientes scripts:
1. Crea el código PHP para inicializar los siguientes arrays y realizar las operaciones
indicadas.
a) Declara un array de enteros de nombre $coches e introduce en él 8 elementos
cuyos valores sean 32, 11, 45, 22, 78, -3, 9, 66, 5. A continuación muestra por
pantalla el elemento con localizador 5. Deberás obtener por pantalla que se
visualiza -3.
b) Declara un array de numéricos decimales tipo double de nombre $importe e
introduce en él cuatro elementos que sean 32.583, 11.239, 45.781, 22.237. A
continuación muestra por pantalla el elemento con localizador 1 y el 3..
c) Declara un array de booleanos de nombre $confirmado e introduce en él seis
elementos que sean true, true, false, true, false, false. A continuación muestra por
pantalla el elemento con localizador cero. Deberás obtener por pantalla que se
muestra “true”.
d) Declara un array de strings de nombre $jugador e introduce en él 5 elementos
que sean "Crovic", "Antic", "Malic", "Zulic" y "Rostrich". A continuación usando el
operador de concatenación haz que se muestre la frase: <<La alineación del
equipo está compuesta por Crovic, Antic, Malic, Zulic y Rostrich.>>

*/


// a)
$coches = array(32, 11, 45, 22, 78, -3, 9, 66, 5);
echo "El elemento con localizador 5 en el array \$coches es: " . $coches[5] . "\n";  

// b) 
$importe = array(32.583, 11.239, 45.781, 22.237);
echo "El elemento con localizador 1 en el array \$importe es: " . $importe[1] . "\n";  
echo "El elemento con localizador 3 en el array \$importe es: " . $importe[3] . "\n";  

// c) 
$confirmado = array(true, true, false, true, false, false);
echo "El elemento con localizador 0 en el array \$confirmado es: " . ($confirmado[0] ? 'true' : 'false') . "\n";  

// d)
$jugador = array("Crovic", "Antic", "Malic", "Zulic", "Rostrich");
echo "La alineación del equipo está compuesta por " . implode(", ", $jugador) . ".\n";
//El imploid hace una union de los elmenetos de un array para que sea un string


?>

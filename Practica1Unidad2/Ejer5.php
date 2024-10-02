<?php
/* 
Crear un programa partir de 3 valores, a b y c que corresponden a los tres
coeficientes de una ecuación de segundo grado muestre las soluciones de la
misma La solución de la ecuación de segundo grado depende del signo de b2-4ac:
 si b2-4ac es negativo no hay soluciones
 si es nulo, hay sólo una solución -b/2a
 si es positivo, hay dos soluciones: (-b+sqrt(b2-4ac))/(2a) y (-bsqrt(b2-4ac))/(2a)

*/
<?php

function resolverEcuacionCuadratica($a, $b, $c) {
    // Calcular el discriminante
    $discriminante = $b * $b - 4 * $a * $c;

    if ($discriminante < 0) {
        echo "No hay soluciones reales.\n";
    } elseif ($discriminante == 0) {
        $solucion = -$b / (2 * $a);
        echo "Hay una única solución: x = $solucion\n";
    } else {
        $solucion1 = (-$b + sqrt($discriminante)) / (2 * $a);
        $solucion2 = (-$b - sqrt($discriminante)) / (2 * $a);
        echo "Hay dos soluciones: x1 = $solucion1 y x2 = $solucion2\n";
    }
}

// Valores de los coeficientes
$a = 1;
$b = -3;
$c = 2;

// Llamar a la función para resolver la ecuación
resolverEcuacionCuadratica($a, $b, $c);
?>




?>
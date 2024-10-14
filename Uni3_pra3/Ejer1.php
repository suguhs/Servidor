<?php
/*
Crea una función para resolver la ecuación de segundo grado. Esta función recibe
los coeficientes de la ecuación y devuelve un array con las soluciones. Si no hay
soluciones reales, devuelve FALSE
*/

function resolverEcuacionCuadratica($a, $b, $c) {
    $discriminante = $b * $b - 4 * $a * $c;

    if ($discriminante < 0) {
        return false;  // No hay soluciones reales
    }

    $sol1 = (-$b + sqrt($discriminante)) / (2 * $a);
    $sol2 = (-$b - sqrt($discriminante)) / (2 * $a);

    return $discriminante == 0 ? [$sol1] : [$sol1, $sol2];
}

// Ejemplo de uso
$soluciones = resolverEcuacionCuadratica(1, -3, 2);
if ($soluciones !== false) {
    echo "Las soluciones son: " . implode(", ", $soluciones);
} else {
    echo "No hay soluciones reales.";
}
?>

<?php
/*
Escriba un programa a partir de un número entero generado de forma aleatoria
indique si es primo. Un número primo es aquel que es divisible por el mismo y la
unidad
*/
function esPrimo($num) {
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false; 
        }
    }
    return true; 
}


$num = rand(1, 100);


if (esPrimo($num)) {
    echo "$num es primo";
} else {
    echo "$num NO es primo";
}
?>
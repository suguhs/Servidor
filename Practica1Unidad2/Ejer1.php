<?php
/*
Dados 2 números asignados dentro del código a variables realizar el siguiente
cálculo: si son iguales que los multiplique, si el primero es mayor que el segundo
que los reste y si no que los sume. Mostrar el resultado en pantalla.
*/

// Asignar los dos números a variables
$num1 = 10;
$num2 = 5;

// Verificar las condiciones y realizar la operación correspondiente
if ($num1 == $num2) {
    $resultado = $num1 * $num2; // Si son iguales, multiplicar
} elseif ($num1 > $num2) {
    $resultado = $num1 - $num2; // Si el primero es mayor, restar
} else {
    $resultado = $num1 + $num2; // Si no, sumar
}

// Mostrar el resultado en pantalla
echo "El resultado es: " . $resultado;
?>

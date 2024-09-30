<?php
/*
Dados 3 números asignados dentro del código a mostrar el número mayor de los
tres.
*/

// Asignar los tres números a variables
$num1 = 10;
$num2 = 4;
$num3 = 30;

// Comparar los números para encontrar el mayor
if ($num1 >= $num2 && $num1 >= $num3) {
    $max = $num1;
} elseif ($num2 >= $num1 && $num2 >= $num3) {
    $max = $num2;
} else {
    $max = $num3;
}

// Mostrar el número mayor
echo "El número mayor es: " . $max;
?>

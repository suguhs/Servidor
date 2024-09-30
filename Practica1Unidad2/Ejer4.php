<?php
/*
Identificar entre dos números aleatorios cual es el mayor y si este es par o impar.
Buscar información previamente para generar números aleatorios y usarla para
resolver el ejercicio
*/
$num1=rand(1, 100);
$num2=rand(1, 100);

if($num1>$num2){
    echo "numero mayor el 1: ".$num1. "\n";
    echo "numero menor el 2: ".$num2 ;
}else{
    echo "numero mayor el 2: ".$num2 ."\n";
    echo "numero menor el 1: ".$num1;
}
if($num1 % 2 == 0){
    echo "El primer numero es par: ".$num1;
}else{
    echo "El primer numero es impar: ".$num1;
}
if($num2 % 2 == 0){
    echo "El segundo numero es par: ".$num2;
}else{
    echo "El segundo numero es impar: ".$num2;
}

?>
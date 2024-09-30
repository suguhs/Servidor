<?php
/*
Determinar la cantidad de dinero que recibirá un trabajador por concepto de las
horas extras trabajadas en una empresa, sabiendo que cuando las horas de
trabajo exceden de 40, el resto se consideran horas extras y que estas se pagan al
doble de una hora normal cuando no exceden de 8; si las horas extras exceden de
8 se pagan las primeras 8 al doble de lo que se pagan las horas normales y el resto
al triple.
*/

$horasTrabajadas = 50;
$PagoPorHora= 10;

$HorasExtras=$horasTrabajadas-40;
$paga=0;

if ($horasTrabajadas > 40) { 
    $paga = 40 * $PagoPorHora;              
} else {
    $paga = $horasTrabajadas * $PagoPorHora; 
}

if($HorasExtras> 0 && $HorasExtras<=8){
    $paga+=$HorasExtras*($PagoPorHora*2);
}
    elseif ($HorasExtras>8){
        $paga+=8*($PagoPorHora*2); 
        $paga += ($HorasExtras - 8) * ($PagoPorHora * 3);
    }

echo "El total de lo que cobra es: ". $paga;



?>
<?php
// Definir el array asociativo
$v = array();
$v[1] = 90;
$v[30] = 7;
$v['e'] = 99;
$v['hola'] = 43;

// Imprimir los valores usando foreach
echo "Valores del array asociativo:" . "</br>";
foreach ($v as $clave => $valor) {
    echo "Clave: " . $clave . " - Valor: " . $valor . "</br>";
}
?>

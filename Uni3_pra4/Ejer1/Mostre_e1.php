<?php
require("Ejer1.php");

$operar = new Operaciones(50, 20);

echo $operar. "</br>"; 

echo "<br>";

echo "Suma: " . $operar->suma() . "<br>";
echo "Resta: " . $operar->resta() . "<br>";
echo "Multiplicación: " . $operar->multiplicacion() . "<br>";
echo "División: " . $operar->division() . "<br>";
?>

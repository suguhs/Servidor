<?php
/*
Implementa un array asociativo con los siguientes valores y ordénalo de menor a
mayor. Muestra los valores en una tabla.
$numeros=array(3,2,8,123,5,1)
*/

echo "<html>\n<body>\n";
echo "Array desordenado:<br>";

$numeros = array(3, 2, 8, 123, 5, 1);
print_r($numeros);

sort($numeros);


echo "<table border='1' cellpadding='5'>\n<tr><th>Número</th></tr>\n";
foreach ($numeros as $v) {
    echo "<tr><td>$v</td></tr>\n";
}
echo "</table>\n</body>\n</html>\n";
?>
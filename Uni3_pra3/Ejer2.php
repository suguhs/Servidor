
<?php

include 'matematicas.php';

$soluciones = resolverEcuacionCuadratica(1, -3, 2);

if ($soluciones !== false) {
    echo "Las soluciones son: " . implode(", ", $soluciones);
} else {
    echo "No hay soluciones reales.";
}
?>
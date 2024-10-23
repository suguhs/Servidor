<?php
if (isset($_GET['n1']) && isset($_GET['n2'])) {
    // Recoger los valores
    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];

    $suma = $n1 + $n2;
    echo "Resultado de la Suma";
    echo "La suma de $n1 y $n2 es: $suma";
} else {
    echo "Por favor, introduce dos números en el formulario";
}
?>


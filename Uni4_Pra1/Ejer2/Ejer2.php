<?php
if (isset($_GET['opciones'])) {
    // Recoger los valores
    $opciones = $_GET['opciones'];

    // Usar la variable $opciones dentro del switch
    switch ($opciones) {
        case "Op1":
            echo "Eres una personita.";
            break;
        case "Op2":
            echo "Todavía eres muy joven.";
            break;
        case "Op3":
            echo "Eres una persona joven.";
            break;
        case "Op4":
            echo "Eres una persona madura.";
            break;
        case "Op5":
            echo "Ya eres una persona mayor.";
            break;
        default:
            echo "Opción no válida.";
    }
} else {
    echo "Aún no me has dicho tu edad.";
}
?>

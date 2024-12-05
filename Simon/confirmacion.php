<?php
session_start();


if (!isset($_SESSION['color_correcto'])) {
    echo "Error: No se generó un color. Vuelve a empezar el juego.";
    exit;
}

$color_correcto = $_SESSION['color_correcto'];
$respuesta_usuario = $_POST['color'] ?? '';

if ($respuesta_usuario === $color_correcto) {
    echo "¡Correcto! El color era $color_correcto.";
} else {
    echo "Incorrecto. El color correcto era $color_correcto.";
}


unset($_SESSION['color_correcto']);
?>

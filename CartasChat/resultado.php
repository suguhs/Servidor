<?php
session_start();

if (!isset($_SESSION['cartas'])) {
    header('Location: mostrarcartas.php');
    exit;
}

$pareja1 = (int)$_POST['pareja1'];
$pareja2 = (int)$_POST['pareja2'];
$cartas = $_SESSION['cartas'];
$mensaje = '';

if ($cartas[$pareja1] === $cartas[$pareja2]) {
    $mensaje = "¡Acierto! Posiciones $pareja1 y $pareja2 después de {$_SESSION['levantadas']} intentos.";
    $_SESSION['puntos'] = ($_SESSION['puntos'] ?? 0) + 1;
} else {
    $mensaje = "¡Fallo! Posiciones $pareja1 y $pareja2 después de {$_SESSION['levantadas']} intentos.";
    $_SESSION['puntos'] = ($_SESSION['puntos'] ?? 0) - 1;
}

$_SESSION['levantadas'] = 0;
$_SESSION['selecciones'] = [];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h1><?php echo $mensaje; ?></h1>
    <p>Puntos actuales: <?php echo $_SESSION['puntos']; ?></p>
    <a href="mostrarcartas.php">Volver al juego</a>
</body>
</html>

<?php
session_start();

// Inicializar las variables si es la primera vez
if (!isset($_SESSION['cartas'])) {
    $cartas = range(1, 6); // Genera números de 1 a 6
    shuffle($cartas); // Mezcla aleatoriamente
    $_SESSION['cartas'] = array_merge($cartas, $cartas); // Duplicar para crear parejas
    shuffle($_SESSION['cartas']);
    $_SESSION['levantadas'] = 0;
    $_SESSION['selecciones'] = [];
    $_SESSION['usuario'] = isset($_POST['usuario']) ? htmlspecialchars($_POST['usuario']) : 'Invitado';
}

// Procesar si se ha levantado una carta
if (isset($_POST['levantar'])) {
    $indice = (int)$_POST['levantar'];
    if (!in_array($indice, $_SESSION['selecciones'])) {
        $_SESSION['selecciones'][] = $indice;
        $_SESSION['levantadas']++;
    }
}

// Resetear selecciones si hay más de 2 cartas levantadas
if (count($_SESSION['selecciones']) > 2) {
    $_SESSION['selecciones'] = [];
}

// Obtener las cartas levantadas
$combinacion = $_SESSION['cartas'];
$selecciones = $_SESSION['selecciones'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego de Cartas</title>
    <style>
        .carta {
            width: 100px;
            height: 150px;
            display: inline-block;
            margin: 10px;
            text-align: center;
            line-height: 150px;
            font-size: 24px;
            border: 1px solid #000;
            background-color: #000;
            color: #fff;
        }
        .visible {
            background-color: #fff;
            color: #000;
        }
    </style>
</head>
<body>
    <h1>Bienvenido, <?php echo $_SESSION['usuario']; ?>!</h1>
    <p>Cartas levantadas: <?php echo $_SESSION['levantadas']; ?></p>

    <form method="post">
        <?php foreach ($combinacion as $index => $valor): ?>
            <button type="submit" name="levantar" value="<?php echo $index; ?>" class="carta <?php echo in_array($index, $selecciones) ? 'visible' : ''; ?>">
                <?php echo in_array($index, $selecciones) ? $valor : ''; ?>
            </button>
        <?php endforeach; ?>
    </form>

    <form method="post" action="resultado.php">
        <h2>Seleccionar Pareja</h2>
        <input type="number" name="pareja1" min="1" max="6" required>
        <input type="number" name="pareja2" min="1" max="6" required>
        <button type="submit">Comprobar</button>
    </form>
</body>
</html>

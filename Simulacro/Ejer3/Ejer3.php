<?php
session_start();


if (!isset($_SESSION['numero_secreto']) || isset($_POST['reiniciar'])) {
    $_SESSION['numero_secreto'] = rand(1, 100);  
    $_SESSION['intentos'] = 0;  
}


$mensaje = "";
if (isset($_POST['jugada'])) {
    $numero_jugado = (int)$_POST['jugada'];
    $_SESSION['intentos']++;  
    if ($numero_jugado < $_SESSION['numero_secreto']) {
        $mensaje = "El número es mayor que $numero_jugado. Inténtalo de nuevo.";
    } elseif ($numero_jugado > $_SESSION['numero_secreto']) {
        $mensaje = "El número es menor que $numero_jugado. Inténtalo de nuevo.";
    } else {
        $mensaje = "¡Enhorabuena! Has acertado el número en " . $_SESSION['intentos'] . " intentos.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Adivina el Número</title>
</head>
<body>
    <h1>Adivina el Número</h1>

    <?php if ($mensaje && $mensaje !== "¡Enhorabuena! Has acertado el número en " . $_SESSION['intentos'] . " intentos.") : ?>
       
        <p><?php echo $mensaje; ?></p>
        
        <form action="ejer3.php" method="POST">
            <label for="jugada">Introduce un número entre 1 y 100:</label>
            <input type="number" name="jugada" id="jugada" min="1" max="100" required>
            <button type="submit">Probar</button>
        </form>
    <?php elseif ($mensaje) : ?>
        
        <p><?php echo $mensaje; ?></p>
        <form action="ejer3.php" method="POST">
            <button type="submit" name="reiniciar">Sigue jugando</button>
        </form>
    <?php else : ?>
       
        <form action="ejer3.php" method="POST">
            <label for="jugada">Introduce un número entre 1 y 100:</label>
            <input type="number" name="jugada" id="jugada" min="1" max="100" required>
            <button type="submit">Probar</button>
        </form>
    <?php endif; ?>
</body>
</html>

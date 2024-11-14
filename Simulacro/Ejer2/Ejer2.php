<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego de Binario a Decimal</title>
</head>

<body>
    <?php
    $numb = [1, 0, 0, 1];
    $foto = ["Imagenes/ocho.jpg", "Imagenes/cuatro.jpg", "Imagenes/dos.jpg", "Imagenes/uno.jpg"];
    $binario = [];
    for ($i = 0; $i < 4; $i++) {
        $numero_Rand = rand(0, 1);
        $binario[$i] = $numero_Rand;
    }
    $binario_str = implode("", $binario);
    $decimal = bindec($binario_str);
    
    echo "<p>El número binario generado es: " . $binario_str . "</p>";
    
    // Colocar las imágenes en fila
    echo "<div>";
    for ($i = 0; $i < 4; $i++) {
        if ($binario[$i] == 1) {
            echo "<img src='" . $foto[$i] . "' alt='Imagen " . (2 ** (3 - $i)) . "' style='display:inline-block;'>";
        } else {
            echo "<img src='Imagenes/blanco.jpg' alt='Imagen " . (2 ** (3 - $i)) . "' style='display:inline-block;'>";
        }
    }
    echo "</div>";
    ?>

    <form action="ejer2.php" method="POST">
        <label for="decimal">Introduce el número en decimal:</label>
        <input type="number" name="decimal" min="0" max="15" required>
        <button type="submit">Comprobar</button>
    </form>
</body>

</html>

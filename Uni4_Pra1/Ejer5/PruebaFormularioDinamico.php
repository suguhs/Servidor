<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de 9 Números</title>
</head>
<body>
    <h2>Calculadora: Suma de 9 Números</h2>

    <?php
    $suma = 0;
    $vector = [];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        echo "<h3>El vector tiene 9 elementos:</h3>";
        echo "<ul>";
        
        for ($i = 0; $i < 9; $i++) {
            $valor = isset($_POST["num$i"]) ? $_POST["num$i"] : 0;
            

            $vector[] = $valor;
            if (is_numeric($valor)) {
                echo "<li>$i = $valor</li>";
                $suma += $valor;
            } else {
                echo "<li>$i = No es un número válido</li>";
            }
        }

        echo "</ul>";
        echo "<p>La suma es $suma</p>";
    }
    ?>

    <form action="" method="post">
        <h3>Ingrese los 9 números:</h3>
        <?php

        for ($i = 0; $i < 9; $i++) {
            $valorAnterior = isset($vector[$i]) ? $vector[$i] : '';
            echo "<label for='num$i'>$i:</label>";
            echo "<input type='text' id='num$i' name='num$i' value='$valorAnterior'><br><br>";
        }
        ?>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>

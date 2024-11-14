<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Matriz 2x3</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $suma = 0;
        for ($i = 0; $i < 2; $i++) {
            for ($j = 0; $j < 3; $j++) {
           
           $valor = isset($_POST["matriz"][$i][$j]) ? (int)$_POST["matriz"][$i][$j] : 0;
           echo "<li>$valor --> " . decbin($valor) . "</li>";
        }
        echo "</ul>";
    } }else {
        
        echo '<form action="ejer1.php" method="POST">';
        echo '<table>';
        for ($i = 0; $i < 2; $i++) {
            echo '<tr>';
            for ($j = 0; $j < 3; $j++) {
                echo '<td>E(' . $i . ',' . $j . ') <input type="number" name="matriz[' . $i . '][' . $j . ']" value="0"></td>';
            }
            echo '</tr>';
        }
        echo '</table>';
        echo '<br><button type="submit">Calcular</button>';
        echo '</form>';
    }
    ?>
</body>
</html>

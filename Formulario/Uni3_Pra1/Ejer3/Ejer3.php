<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Verificación</title>
</head>
<body>
    <h1>Calculadora</h1>
    <form method="get">
        <label for="n1">A:</label>
        <input type="number" id="n1" name="n1" required><br><br>

        <label for="n2">B:</label>
        <input type="number" id="n2" name="n2" required><br><br>

        <input type="submit" name="operacion" value="Sumar">
        <input type="submit" name="operacion" value="Restar">
        <input type="submit" name="operacion" value="Multiplicar">
        <input type="submit" name="operacion" value="Dividir">
    </form>

    <?php
    
    if (isset($_GET['n1']) && isset($_GET['n2']) && isset($_GET['operacion'])) {
        $n1 = $_GET['n1'];
        $n2 = $_GET['n2'];
        $operacion = $_GET['operacion'];
        $resultado = 0;

      
        switch ($operacion) {
            case "Sumar":
                $resultado = $n1 + $n2;
                break;
            case "Restar":
                $resultado = $n1 - $n2;
                break;
            case "Multiplicar":
                $resultado = $n1 * $n2;
                break;
            case "Dividir":
                if ($n2 != 0) {
                    $resultado = $n1 / $n2;
                } else {
                    echo "Error: No se puede dividir por cero.";
                    exit();
                }
                break;
            default:
                echo "Operación no válida.";
                exit();
        }

        
        echo "Resultado: $resultado";
    }
    ?>
</body>
</html>

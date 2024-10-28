<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 6</title>
</head>
<body>

<?php
if (!isset($_POST['num_elementos'])) {
?>
    <form method="post" action="">
        Número de Elementos: <input type="text" name="num_elementos">
        <input type="submit" name="aceptar" value="Aceptar">
    </form>
<?php
} else {
    $num_elementos = intval($_POST['num_elementos']);
    if (!isset($_POST['vector'])) {
?>
        <form method="post" action="">
            <?php
            for ($i = 0; $i < $num_elementos; $i++) {
                echo ($i + 1) . ' <input type="text" name="vector[]" ><br>';
            }
            ?>
            <input type="hidden" name="num_elementos" value="<?php echo $num_elementos; ?>">
            <input type="submit" name="enviar" value="Enviar">
        </form>
<?php
    } else {
        $vector = $_POST['vector'];
        $suma = array_sum($vector);
        echo 'El vector tiene ' . count($vector) . ' elementos<br>';
        foreach ($vector as $indice => $valor) {
            echo $indice . ' = ' . $valor . '<br>';
        }
        echo 'La suma es ' . $suma;
    }
}
?>

</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario Dinámico</title>
<body>
    <form method="get" action="">
        <label for="mes">Introduce un mes:</label>
        <input type="number" id="mes" name="mes" min="1" max="12" value="<?= isset($_GET['mes']) ? $_GET['mes'] : date('m') ?>">
        <label for="anio">Introduce un año:</label>
        <input type="number" id="anio" name="anio" min="1900" max="2100" value="<?= isset($_GET['anio']) ? $_GET['anio'] : date('Y') ?>">
        <input type="submit" value="Enviar">
    </form>

    <?php
    if (isset($_GET['mes']) && isset($_GET['anio'])) {
        $mes = $_GET['mes'];
        $anio = $_GET['anio'];

       
        $fecha = DateTime::createFromFormat('Y-m-d', "$anio-$mes-01");
        $dia_inicio = $fecha->format('N'); // (1 = Lunes, 7 = Domingo)
        $dias_en_mes = $fecha->format('t');

        echo "<h2>Calendario $anio</h2>";

 
        echo "<table>";
        echo "<tr><th>L</th><th>M</th><th>X</th><th>J</th><th>V</th><th>S</th><th>D</th></tr>";
        echo "<tr>";

        // Imprimir celdas vacías hasta el día de inicio
        for ($i = 1; $i < $dia_inicio; $i++) {
            echo "<td></td>";
        }

        // Imprimir los días del mes
        for ($dia = 1; $dia <= $dias_en_mes; $dia++) {
            echo "<td>$dia</td>";
            // Romper la fila al llegar al domingo
            if (($dia + $dia_inicio - 1) % 7 == 0) {
                echo "</tr><tr>";
            }
        }

        // Completar la última fila si es necesario
        while (($dia + $dia_inicio - 1) % 7 != 0) {
            echo "<td></td>";
            $dia++;
        }

        echo "</tr>";
        echo "</table>";
    }

    /*$dia_inicio = $fecha->format('N');N: Día de la semana (numérico) 
    Significado: Devuelve el día de la semana en formato numérico,
    con valores del 1 al 7.*/

    /* $dias_en_mes = $fecha->format('t');
    Significado: Devuelve el número total de días en el mes 
    actual de la fecha. Valores posibles:

28 o 29: Para febrero (dependiendo de si el año es bisiesto o no).
30: Para abril, junio, septiembre y noviembre.
31: Para enero, marzo, mayo, julio, agosto, octubre y diciembre.
    */

    ?>
</body>
</html>



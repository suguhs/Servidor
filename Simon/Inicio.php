<?php
// Colores posibles
$colors = ["yellow", "blue", "red", "green"];
shuffle($colors); 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generar Círculos de Colores</title>
    <style>
        .container {
            display: flex; 
            justify-content: center; 
            gap: 20px; 
            margin-top: 50px;
        }
        .circle {
            width: 100px;
            height: 100px;
            border-radius: 50%;
        }
        .button {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Juego Simon</h1>
    <div class="container">
        <!-- Asignar colores a cada círculo -->
        <div class="circle" style="background-color: <?php echo $colors[0]; ?>;"></div>
        <div class="circle" style="background-color: <?php echo $colors[1]; ?>;"></div>
        <div class="circle" style="background-color: <?php echo $colors[2]; ?>;"></div>
        <div class="circle" style="background-color: <?php echo $colors[3]; ?>;"></div>
    </div>
    <form action="simon.php" method="get">
        <button type="submit" class="button">Empezar a Jugar</button>
    </form>
</body>
</html>

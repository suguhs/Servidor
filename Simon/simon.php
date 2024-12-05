<?php
session_start();

// Generar un color aleatorio
$numr = rand(0, 3);
$colores = ['yellow', 'blue', 'red', 'green'];
$color_actual = $colores[$numr];

// Guardar el color en la sesión
$_SESSION['color_correcto'] = $color_actual;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego Simon - 4 Círculos</title>
    <style>
        body {
            text-align: center;
            font-family: Arial, sans-serif;
        }
        .container {
            display: flex; /* Usamos flexbox para alinearlos en línea */
            justify-content: center; /* Centrado horizontal */
            gap: 20px; /* Espaciado entre los círculos */
            margin-top: 50px;
        }
        .circle {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: white;
            font-size: 18px;
            cursor: pointer;
            background-color: black;
        }
        .yellow { background-color: yellow; color: black; }
        .blue { background-color: blue; }
        .red { background-color: red; }
        .green { background-color: green; }
        .button-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }
        .button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
        }
        .red-button { background-color: red; color: white; }
        .blue-button { background-color: blue; color: white; }
        .yellow-button { background-color: yellow; color: black; }
        .green-button { background-color: green; color: white; }
    </style>
</head>
<body>
    <h1>Juego Simon</h1>
    <p>Recuerda el color que se iluminó y selecciona el correcto:</p>
    
    <!-- Círculos de colores -->
    <div class="container">
        <div class="circle "></div>
        <div class="circle "></div>
        <div class="circle "></div>
        <div class="circle "></div>
    </div>

    <!-- Botones de colores para que el jugador elija -->
    <form action="check.php" method="POST">
        <div class="button-container">
            <button type="submit" name="color" value="red" class="button red-button">Rojo</button>
            <button type="submit" name="color" value="blue" class="button blue-button">Azul</button>
            <button type="submit" name="color" value="yellow" class="button yellow-button">Amarillo</button>
            <button type="submit" name="color" value="green" class="button green-button">Verde</button>
        </div>
    </form>
</body>
</html>

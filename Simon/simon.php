<?php
$numr = rand(0, 3);

switch ($numr) {
  case 0:
    echo "yellow";
    break;
  case 1:
    echo "blue";
    break;
  case 2:
    echo "red";
    break;
  case 3:
    echo "green";
    break;
}
?>




<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generar Círculo de Color Aleatorio</title>
    <style>
        .circle {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin: 20px auto;
            background-color: black;
        }
        
        .button {
            display: block;
            margin: 10px auto;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="circle"></div>
    <form action=verificacion.php method="get">
        <button type="submit" class="button">Rojo</button>
        <button type="submit" class="button">Verde</button>
        <button type="submit" class="button">Empezar a Jugar</button>
        <button type="submit" class="button">Empezar a Jugar</button>
    </form>
</body>
</html>

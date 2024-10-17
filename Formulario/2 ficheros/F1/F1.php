<!-- formulario.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Verificación</title>
</head>
<body>
    <h1>Verificar si un nombre existe</h1>
    <form action="../F2/F2.php" method="get">
        <label for="nombre">Ingrese un nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="apellidos">Ingrese los apellidos:</label>
        <input type="text" id="apellidos" name="apellidos" required><br><br>

        <input type="submit" value="Verificar">
    </form>
</body>
</html>

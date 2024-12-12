<?php
  session_start();
  $combi = $_SESSION["posicion"];
  var_dump($combi);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div border="black" width ="400px">
    <h1>Bienvenid@, <?php echo $_SESSION["login"] ?></h1>
      <img src="img/20241212.jpg">
    
      <form action="" method="post">
        <label>Solucion Jeroglifico </label>
        <input type="text" id="solu" name="solu" required>
        <button type="submit" name="enviar" value="0">Enviar</button>
        <br>
    </form>
    </div>
</body>
</html>
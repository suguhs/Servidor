<?php
 require_once 'login.php';
  session_start();
  $aciertos=0;
  $fallos=0;
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
      <a src="puntos.php">Ver Puntos Por Jugador</a>
      <a src="resultados.php">Resultados del Dia </a>
    </div>
    <?php
      if (isset($_POST['solu'])) {
        $query = "SELECT solucion FROM solucion WHERE fecha like `2024-12-12`";
        $result = $conn->query($query);
        if($_POST['solu']=="$result"){
          $aciertos++;
        }else{
          $fallos--;
        }
        $solu = $_POST['solu'];
        $solu= $_SESSION[`solu`];
        $aciertos= $_SESSION[$aciertos];
        $fallos=$_SESSION[$fallos];
    }
    ?>
</body>
</html>
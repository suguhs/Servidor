<!DOCTYPE HTML>  
<html>
<head>
    <style>
        .error {color: #FF0000;}
    </style>
</head>
<body>  

<?php
include 'Ejer9';
include 'Ejer10';

$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Nombre es requerido";
    } else {
        $name = $_POST["name"];
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $nameErr = "Solo se permiten letras y espacios en blanco";
        }
    }
    
    if (empty($_POST["email"])) {
        $emailErr = "E-mail es requerido";
    } else {
        $email = $_POST["email"];
        if (!validarEmail($email)) {
            $emailErr = "Formato de E-mail inválido";
        }
    }
      
    if (!empty($_POST["website"])) {
        $website = $_POST["website"];
        if (!validarURL($website)) {
            $websiteErr = "URL inválida";
        }
    }

    $comment = $_POST["comment"];
  
    if (empty($_POST["gender"])) {
        $genderErr = "Género es requerido";
    } else {
        $gender = $_POST["gender"];
    }
}
?>

<h2>Ejemplo de Validación de Formulario en PHP</h2>
<p><span class="error">* campos requeridos</span></p>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">  
    Nombre: <input type="text" name="name" value="<?php echo $name;?>">
    <span class="error">* <?php echo $nameErr;?></span>
    <br><br>
    E-mail: <input type="text" name="email" value="<?php echo $email;?>">
    <span class="error">* <?php echo $emailErr;?></span>
    <br><br>
    Sitio web: <input type="text" name="website" value="<?php echo $website;?>">
    <span class="error"><?php echo $websiteErr;?></span>
    <br><br>
    Comentario: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
    <br><br>
    Género:
    <input type="radio" name="gender" <?php if ($gender == "female") echo "checked";?> value="female">Femenino
    <input type="radio" name="gender" <?php if ($gender == "male") echo "checked";?> value="male">Masculino
    <span class="error">* <?php echo $genderErr;?></span>
    <br><br>
    <input type="submit" name="submit" value="Enviar">  
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && !$nameErr && !$emailErr && !$websiteErr && !$genderErr) {
    echo "<h2>Su Entrada:</h2>";
    echo "Nombre: " . $name . "<br>";
    echo "E-mail: " . $email . "<br>";
    echo "Sitio web: " . $website . "<br>";
    echo "Comentario: " . $comment . "<br>";
    echo "Género: " . $gender . "<br>";
}
?>

</body>
</html>

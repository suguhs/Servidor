<?php
session_start();
$aciertos = $_SESSION[$aciertos];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Bienvenid@, <?php echo $_SESSION["login"] ?></h1>
    <br>
    <br>
    <?php

    echo '<h1>Puntos por jugador: $aciertos</h1>
            <h1> Fecha: 2024-12-12</h1>
            <table>
                <tr>
                    <th>
                        Login
                    </th>
                    <th>
                        Hora
                    </th>
                </tr>
                
                <tr>
                    <td>
                        leston
                    </td>
                    <td>
                        12:11:03
                    </td>
                </tr>
                 <tr>
                    <td>
                        miguel
                    </td>
                    <td>
                        12:13:31
                    </td>

                </tr>
                  <tr>
                    <td>
                        olga
                    </td>
                    <td>
                        23:57:38
                    </td>
                </tr>
                <tr>
                    <td>
                         $_SESSION["login"]
                    </td>
                    <td>
                       11:34:24
                    </td>

                </tr>
            </table>
            <h1>Jugadores que fallaron</h1>

             <table>
                <tr>
                    <th>
                        Login
                    </th>
                    <th>
                        Hora
                    </th>
                </tr>
                
                <tr>
                    <td>
                        Diego
                    </td>
                    <td>
                        11:34:24
                    </td>
                </tr>
                </table>

        
        ';


        ?>
</body>

</html>
<?php
/* Implementa un array asociativo con los siguientes valores:
- Muestra los valores del array en una tabla, mostrando el club y el estadio.
- Elimina el estadio asociado al Real Madrid.
- Vuelve a mostrar los valores para comprobar que el estadio ha sido eliminado, esta vez en una lista numerada.
*/

$clubes_futbol = array("Barcelona" => "Camp Nou", "Real Madrid" => "Santiago Bernabéu", "Valencia" => "Mestalla", "Real Sociedad" => "Anoeta");


echo "<html>\n<body>\n";
echo "<h2>Lista de Clubes y Estadios</h2>";
echo "<table border='1' cellpadding='5'>\n<tr><th>Club</th><th>Estadio</th></tr>\n";
foreach ($clubes_futbol as $club => $estadio) {
    echo "<tr><td>$club</td><td>$estadio</td></tr>\n";
}
echo "</table>\n";


unset($clubes_futbol["Real Madrid"]);


echo "<h2>Clubes y Estadios después de la eliminación</h2>";
echo "<ol>\n";
foreach ($clubes_futbol as $club => $estadio) {
    echo "<li>$club: $estadio</li>\n";
}
echo "</ol>\n</body>\n</html>";
?>

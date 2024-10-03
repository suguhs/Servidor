<?php
/*
Genera una matriz de 4*4 de forma aleatoria con números enteros desordenados
mostrar en un renglón los elementos almacenados en la diagonal principal y en el
siguiente los de la diagonal secundaria.
*/
echo "La matriz entera es:<br>";
for ($i=0; $i<4; $i++) {
    for ($j=0; $j<4; $j++) {
        $matriz[$i][$j]=rand(0,100);
            echo $matriz[$i][$j]."   ";
  }
     echo '<br>';
}
//Diagonal principal
echo "Diagonal principal y Secundaria: <br>";
    for ($i=0; $i<4; $i++) {
         echo $matriz[$i][$i]."   ";
}
    echo "<br>";

//Diagonal secundaria

for ($i=0; $i<4; $i++) {
  echo $matriz[$i][3-$i]."   ";
}
echo "<br>";


?>

<?php
/*
Queremos almacenar en una matriz el número de alumnos con el que cuenta una
academia, ordenados en función del nivel y del idioma que se estudia. Tendremos
3 filas que representarán al Nivel básico, medio y de perfeccionamiento y 4
columnas en las que figurarán los idiomas (0 = Inglés, 1 = Francés, 2 = Alemán y 3
= Ruso). Mostrar por pantalla los alumnos que existen en cada nivel e idioma.
*/

$idiomas = array (
    array(1, 6, 3),    
    array(14, 19, 13),  
    array(8, 7, 4),     
    array(3, 2, 1)      
); 


for ($i = 0; $i < 3; $i++) { 
    for ($j = 0; $j < 4; $j++) { 
        echo $idiomas[$j][$i] . " "; 
    }
    echo "<br>"; 
}
?>

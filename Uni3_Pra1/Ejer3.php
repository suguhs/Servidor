<?php
/*
Almacena en un array los 10 primeros números pares. Imprímelos cada uno en
una línea.
*/
$nump = array(); 
$count = 0;


for ($i = 1; $count < 10; $i++) {
    if ($i % 2 == 0  ) { 
        $nump[$count] = $i; 
        $count++; 
    }
}

foreach ($nump as $num) {
    echo $num . "<br>"; 
}

?>

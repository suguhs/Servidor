<?php
$animal = array (
"Perro"=>array ("Mastin"=>"yunito","Salchicha"=>"Fuet","Chiguaga"=>"sarnoso"),
"Gato"=>array("Persa"=>"otis","Comun"=>"garfield","Siames"=>"Princesa")); 

foreach($animal as $index => $tipo) {
    echo "$index: "."</br>"; 
    foreach($tipo as $raza=>$nombre){
        echo $raza.": ".$nombre. " </br>";
    }
    echo "<br>";
}
?>


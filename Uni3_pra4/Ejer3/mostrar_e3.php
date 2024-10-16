<?php
require("Ejer3.php");
$vehiculo = new Vehiculo("Negro", 1500);
echo $vehiculo;
echo "\n";
$vehiculo->circular(); 
$vehiculo->añadir_persona(70); 

?>
<?php
/*Crea un array asociativo para introducir los datos de una persona
 Nombre: Pedro Torres
 Dirección: C/Mayor, 37
 Teléfono: 123456789
 Al acabar muestra los datos por pantalla.*/

  $persona=array(
    'Nombre' => 'Pedro Torres',
    'Direccion' => 'C/Mayor, 17',
    'Telefono' => '123456789'
  );

  foreach ($persona as $elemen => $info) {
    echo "$elemen: $info <br>";
  }
?>
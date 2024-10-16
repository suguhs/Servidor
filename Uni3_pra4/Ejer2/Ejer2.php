<?php

class Vehiculo {
    private $color;
    private $peso;

    public function circular() {
        echo "El vehículo está circulando.\n";
    }

    public function añadir_persona($peso_persona) {
        echo "Se ha añadido una persona que pesa $peso_persona kg.\n";
    }
}

class Cuatro_Ruedas extends Vehiculo{
    private $numero_puertas;

    public function repintar($color){

    }
}
class Dos_Ruedas extends Vehiculo{
    private $cilindrada;

    public function poner_gasolina($litros){

    }
}
class Coche extends Cuatro_Ruedas{
    private $nuemro_cadenas_nieve;

    public function añadir_cadenas_nieve(num){

    }
    public function quitar_cadenas_nieve(num){

    }
}

class Camion extends Cuatro_Ruedas{
    private $longitud;

    public function añadir_remolque(longitud_remolque){

    }
}

?>
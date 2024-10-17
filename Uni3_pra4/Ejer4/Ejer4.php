<?php

class Vehiculo {
    private $color;
    private $peso;

    public function __construct($color, $peso) {
        $this->color = $color;
        $this->peso = $peso;
    }

    public function getColor() {
        return $this->color;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function setPeso($peso) {
        $this->peso = $peso;
    }

    public function añadir_persona($peso_persona) {
        $this->peso += $peso_persona; 
    }

    public function repintar($color) {
        $this->setColor($color);
    }
}

class Cuatro_Ruedas extends Vehiculo {
    private $numero_puertas;

    public function __construct($color, $peso, $numero_puertas) {
        parent::__construct($color, $peso);
        $this->numero_puertas = $numero_puertas;
    }

    public function getNumeroPuertas() {
        return $this->numero_puertas;
    }
}

class Dos_Ruedas extends Vehiculo {
    private $cilindrada;

    public function __construct($color, $peso, $cilindrada) {
        parent::__construct($color, $peso);
        $this->cilindrada = $cilindrada;
    }

    public function poner_gasolina($litros) {
        $nuevo_peso = $this->getPeso() + $litros;
        $this->setPeso($nuevo_peso);
    }
}

class Coche extends Cuatro_Ruedas {
    private $numero_cadenas_nieve;

    public function __construct($color, $peso, $numero_puertas) {
        parent::__construct($color, $peso, $numero_puertas);
        $this->numero_cadenas_nieve = 0; // Inicializar en 0
    }

    public function añadir_cadenas_nieve($num) {
        $this->numero_cadenas_nieve += $num;
    }

    public function getNumeroCadenasNieve() {
        return $this->numero_cadenas_nieve;
    }
}

class Camion extends Cuatro_Ruedas {
    private $longitud;

    public function __construct($color, $peso, $numero_puertas, $longitud) {
        parent::__construct($color, $peso, $numero_puertas);
        $this->longitud = $longitud;
    }

    public function añadir_remolque($longitud_remolque) {
        $this->longitud += $longitud_remolque;
    }

    public function getLongitud() {
        return $this->longitud;
    }
}

?>

<?php

abstract class Vehiculo {
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

    public function __toString() {
        return "Vehículo de color: {$this->color}, Peso: {$this->peso} kg.";
    }

    public function circular() {
        echo "El vehículo circula.<br />";
    }

    public function repintar($color) {
        $this->setColor($color);
        echo "El vehículo ha sido repintado a $color.<br />";
    }

    public static function ver_atributo($objeto) {
        $atributos = get_object_vars($objeto);
        foreach ($atributos as $nombre => $valor) {
            echo "$nombre: $valor<br />";
        }
    }

    public abstract function añadir_persona($peso_persona);
}

class Cuatro_Ruedas extends Vehiculo {
    private $numero_puertas;

    public function __construct($color, $peso, $numero_puertas) {
        parent::__construct($color, $peso);
        $this->numero_puertas = $numero_puertas;
    }

    public function añadir_persona($peso_persona) {
        $this->setPeso($this->getPeso() + $peso_persona);
        echo " Nuevo peso del vehículo: {$this->getPeso()} kg.<br />";
    }
    public static function ver_atributo($objeto) {
        $atributos = get_object_vars($objeto);
        foreach ($atributos as $nombre => $valor) {
            echo "$nombre: $valor<br />";
        }
    }

}

class Dos_Ruedas extends Vehiculo {
    private $cilindrada;

    public function __construct($color, $peso, $cilindrada = null) {
        parent::__construct($color, $peso);
        $this->cilindrada = $cilindrada;
    }

    public function poner_gasolina($litros) {
        $this->setPeso($this->getPeso() + $litros);
        echo "Se han añadido $litros litros de gasolina.<br />";
    }

    public function añadir_persona($peso_persona) {
        $this->setPeso($this->getPeso() + $peso_persona + 2);
        echo " Nuevo peso del vehículo: {$this->getPeso()} kg.<br />";
    }
    public static function ver_atributo($objeto) {
        $atributos = get_object_vars($objeto);
        foreach ($atributos as $nombre => $valor) {
            echo "$nombre: $valor<br />";
        }
    }

}

class Coche extends Cuatro_Ruedas {
    private $numero_cadenas_nieve;

    public function __construct($color, $peso, $numero_puertas, $numero_cadenas_nieve) {
        parent::__construct($color, $peso, $numero_puertas);
        $this->numero_cadenas_nieve = $numero_cadenas_nieve;
    }

    public function añadir_cadenas_nieve($num) {
        $this->numero_cadenas_nieve += $num;
        echo "Se han añadido $num cadenas de nieve. Total: {$this->numero_cadenas_nieve}<br />";
    }

    public function quitar_cadenas_nieve($num) {
        if ($this->numero_cadenas_nieve >= $num) {
            $this->numero_cadenas_nieve -= $num;
            echo "Se han quitado $num cadenas de nieve. Total: {$this->numero_cadenas_nieve}<br />";
        } else {
            echo "No hay suficientes cadenas de nieve para quitar.<br />";
        }
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
        echo "La longitud del remolque, $longitud_remolque, se ha sumado a la longitud total: {$this->longitud}<br />";
    }
}

?>

<?php

class Vehiculo {
    private $color;
    private $peso;

    public function __construct($color, $peso) {
        $this->color = $color;
        $this->peso = $peso;
    }

    // Métodos accesores (getters y setters)
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

    // Método para mostrar información del vehículo
    public function __toString() {
        return "Vehículo de color: {$this->color}, Peso: {$this->peso} kg.";
    }

    public function circular() {
        echo "El vehículo circula.\n";
    }

    public function añadir_persona($peso_persona) {
        $this->peso += $peso_persona; // Ajusta el peso del vehículo
        echo "Se ha añadido una persona que pesa $peso_persona kg. Nuevo peso del vehículo: {$this->peso} kg.\n";
    }
}

class Cuatro_Ruedas extends Vehiculo {
    private $numero_puertas;

    public function __construct($color, $peso, $numero_puertas) {
        parent::__construct($color, $peso); // Llama al constructor de Vehiculo
        $this->numero_puertas = $numero_puertas;
    }

    public function repintar($color) {
        $this->setColor($color);
        echo "El vehículo ha sido repintado a $color.\n";
    }
}

class Dos_Ruedas extends Vehiculo {
    private $cilindrada;

    public function __construct($color, $peso, $cilindrada) {
        parent::__construct($color, $peso);
        $this->cilindrada = $cilindrada;
    }

    public function poner_gasolina($litros) {
        echo "Se han añadido $litros litros de gasolina.\n";
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
        echo "Se han añadido $num cadenas de nieve. Total: {$this->numero_cadenas_nieve}\n";
    }

    public function quitar_cadenas_nieve($num) {
        if ($this->numero_cadenas_nieve >= $num) {
            $this->numero_cadenas_nieve -= $num;
            echo "Se han quitado $num cadenas de nieve. Total: {$this->numero_cadenas_nieve}\n";
        } else {
            echo "No hay suficientes cadenas de nieve para quitar.\n";
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
        echo "Se ha añadido un remolque de $longitud_remolque metros a un camión de longitud {$this->longitud} metros.\n";
    }
}

// Ejemplo de uso en mostrar.php
$vehiculo = new Vehiculo("Negro", 1500);
echo $vehiculo;
echo "\n";
$vehiculo->circular(); 
$vehiculo->añadir_persona(70); 

?>

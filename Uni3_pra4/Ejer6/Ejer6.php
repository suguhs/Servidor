<?php

abstract class Vehiculo {
    private $color;
    private $peso;
    const SALTO_DE_LINEA ="<br />";

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

   
    public function __toString() {
        return "Vehículo de color: {$this->color}, Peso: {$this->peso} kg.";
    }

    public function circular() {
        echo "El vehículo circula.\n";
    }

    public abstract function añadir_persona($peso_persona) {
    
    } 
    public function repintar($color) {
        $this->setColor($color);
        echo "El vehículo ha sido repintado a $color.\n";
    }
    public static function ver_atributo(){
        $atributos = get_object_vars($this); 
        foreach ($atributos as $nombre => $valor) {
            echo "$nombre: $valor\n"; 
        }
    }
}

class Cuatro_Ruedas extends Vehiculo {
    private $numero_puertas;

    public function __construct($color, $peso, $numero_puertas) {
        parent::__construct($color, $peso); 
        $this->numero_puertas = $numero_puertas;
    }
    public function añadir_persona($peso_persona) {
        $this->peso += $peso_persona;
        echo "Se ha añadido una persona que pesa $peso_persona kg. Nuevo peso del vehículo: {$this->peso} kg.\n";
    }
   
}

class Dos_Ruedas extends Vehiculo {
    private $cilindrada;

    public function __construct($color, $peso, $cilindrada) {
        parent::__construct($color, $peso);
        $this->cilindrada = $cilindrada;
    }

    public function poner_gasolina($litros) {
        $nuevo_peso=$this->getPeso() + $litros;
        $this->setPeso($nuevo_peso);
        echo "Se han añadido $litros litros de gasolina.\n";
    }
    public function añadir_persona($peso_persona) {
        $this->peso += ($peso_persona+2);
        echo "Se ha añadido una persona que pesa $peso_persona kg. Nuevo peso del vehículo: {$this->peso} kg.\n";
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
    public function añadir_persona($peso_persona){
        $this->getPeso +=$peso_persona;
        if($this->getPeso>=1500 && $numero_cadenas_nieve<=2){
            echo "Atención, ponga 4 cadenas para la nieve"
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
        $this->$longitud+=$longitud_remolque;
        echo "La longitud del remolque, $longitud_remolque, se a sumado a la longitud= {this->$longitud}\n";
    }
}


?>

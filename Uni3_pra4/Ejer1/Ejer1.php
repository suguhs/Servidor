<?php
class Operaciones {
    private $numero1;
    private $numero2;


    public function __construct($num1, $num2) {
        $this->numero1 = $num1;
        $this->numero2 = $num2;
    }


   
    public function suma() {
        return $this->numero1 + $this->numero2;
    }

    public function resta() {
        return $this->numero1 - $this->numero2;
    }

    public function multiplicacion() {
        return $this->numero1 * $this->numero2;
    }

    public function division() {
        if ($this->numero2 != 0) {
            return $this->numero1 / $this->numero2;
        } else {
            return "División por cero no es posible.";
        }
    }
}



?>

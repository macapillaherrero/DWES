<?php 

class Figura {
    private  $color;
    private  $lados;
    public function __construct( $color, $lados) {
        $this->color = $color;
        $this->lados = $lados;
    }

    public function __get($name) {     
        if (property_exists($this, $name)) {
            return $this->$name;
        }
        return null;
    }

    public function __set($name, $value) {    
        if (property_exists($this, $name)) {
            $this->$name = $value;
        }
    }
    public function __toString() {
        return "Figura de color $this->color con $this->lados lados.";
    }
}

class Circulo extends Figura {
    private $radio;

    public function __construct($color, $radio) {
        parent::__construct($color, 0); // Un círculo no tiene lados
        $this->radio = $radio;
    }

    public function __toString() {
        return "Círculo de color " . $this->color . " con radio $this->radio.";
    }
}

$circulo = new Circulo("verde", 5);
echo $circulo . "<br>"; // Uso de __toString

$circulo->color = "amarillo"; // Modificación a través de __set
echo "Color del círculo modificado: " . $circulo->color . "<br>";

$figura = new Figura("rojo", 4);


echo "Color (mágico): " . $figura->color . "<br>"; // Acceso a través de __get
$figura->color = "azul"; // Modificación a través de __set  

echo "Color modificado: " . $figura->color . "<br>"; // Acceso a través de __get
echo "Lados (mágico): " . $figura->lados . "<br>"; // Acceso a través de __get
$figura->lados = 6; // Modificación a través de __set       
$figura->color = "azul"; // Modificación a través de __set 

echo "Figura: " . $figura . "<br>"; // Uso de __toString
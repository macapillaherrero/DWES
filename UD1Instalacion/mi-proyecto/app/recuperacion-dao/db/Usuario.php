<?php
class Usuario {
    private $nombre;
    private $apellidos;
    private $password;
    private $fecha;
    private $id;

   
    public function __construct($nombre, $apellidos, $password, $fecha, $id = null ) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->id = $id;
        // Cifrar contraseña con password_hash seguro
        $this->password = $password;
        if (isset($_COOKIE['fecha'])) {
            $this->fecha = $_COOKIE['fecha'];
        } elseif (isset($_SESSION['fecha'])) {
            $this->fecha = $_SESSION['fecha'];
        } else {
            $this->fecha = $fecha; // date('Y-m-d H:i:s');
        }
    }

    public function __get($name) {
        if (property_exists($this, $name)) {
            return $this->$name;
        }
        return null; // o lanzar excepción según convenga
    }
  
    public function __set($name, $value) {
        if (property_exists($this, $name)) {
            $this->$name = $value;
        }
    }

}

?>

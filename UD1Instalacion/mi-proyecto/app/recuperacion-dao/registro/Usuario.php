<?php
class Usuario {
    private $nombre;
    private $apellidos;
    private $password;
    private $fecha;

   
    public function __construct($nombre, $apellidos, $password, $fecha) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
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
        return $this->$name ?? null;
    }
  
    public function __set($name, $value) {
       $this->$name = $value;
    }

}

?>

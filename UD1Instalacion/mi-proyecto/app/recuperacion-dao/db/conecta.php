<?php
class ConexionPDO {
    private $host = 'mysql-db';
    private $db   = 'recuperacion';
    private $user = 'root'; //modificar
    private $pass = 'root';
    private $charset = 'utf8mb4';

    private $pdo;
    private static $instance;

    private function __construct() {
        $dsn = "mysql:host=$this->host;dbname=$this->db;charset=$this->charset";
        $opciones = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        try {
            $this->pdo = new PDO($dsn, $this->user, $this->pass, $opciones);
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage(), (int)$e->getCode());
        }
    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new ConexionPDO();
        }
        return self::$instance;
    }

    public function getPdo() {
        return $this->pdo;
    }
}
?>

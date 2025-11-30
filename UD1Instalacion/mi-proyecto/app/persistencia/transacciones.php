<?php
class CuentaDAO {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function getSaldo(int $idCuenta): float {
        $sql = "SELECT saldo FROM cuentas WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$idCuenta]);
        $resultado = $stmt->fetch();
        if ($resultado) {
            return (float) $resultado['saldo'];
        } else {
            throw new Exception("Cuenta no encontrada: $idCuenta");
        }
    }

    public function depositar(int $idCuenta, float $cantidad): bool {
        $sql = "UPDATE cuentas SET saldo = saldo + ? WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$cantidad, $idCuenta]);
    }

    public function transferir(int $idOrigen, int $idDestino, float $cantidad): bool {
        try {
            // Iniciar transacción
            $this->pdo->beginTransaction();

            // Verificar saldo disponible en cuenta origen
            $saldoOrigen = $this->getSaldo($idOrigen);
            if ($saldoOrigen < $cantidad) {
                throw new Exception("Saldo insuficiente en la cuenta origen");
            }

            // Restar cantidad en cuenta origen
            $sql1 = "UPDATE cuentas SET saldo = saldo - ? WHERE id = ?";
            $stmt1 = $this->pdo->prepare($sql1);
            $stmt1->execute([$cantidad, $idOrigen]);

            // Sumar cantidad en cuenta destino
            $sql2 = "UPDATE cuentas SET saldo = saldo + ? WHERE id = ?";
            $stmt2 = $this->pdo->prepare($sql2);
            $stmt2->execute([$cantidad, $idDestino]);

            // Confirmar transacción
            $this->pdo->commit();
            return true;
        } catch (Exception $e) {
            // Cancelar cambios si hay error
            $this->pdo->rollBack();
            throw new Exception("Error en transferencia: " . $e->getMessage());
        }
    }
}

// Script de prueba:
try {
    // Configura la conexión PDO
    $host = 'localhost';
    $db = 'banco';
    $user = 'usuario';
    $pass = 'password';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ]);

    $dao = new CuentaDAO($pdo);

    // Mostrar saldo inicial
    echo "Saldo cuenta 1: " . $dao->getSaldo(1) . "<br>";
    echo "Saldo cuenta 2: " . $dao->getSaldo(2) . "<br><br>";

    // Intentar transferencia segura
    $monto = 150.00;
    echo "Intentando transferir $monto de cuenta 1 a cuenta 2...<br>";
    $dao->transferir(1, 2, $monto);
    echo "Transferencia realizada correctamente.<br><br>";

    // Mostrar saldo final
    echo "Saldo cuenta 1 después: " . $dao->getSaldo(1) . "<br>";
    echo "Saldo cuenta 2 después: " . $dao->getSaldo(2) . "<br>";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>

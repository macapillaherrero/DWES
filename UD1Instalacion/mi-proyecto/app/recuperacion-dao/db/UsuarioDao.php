<?php
class UsuarioDAO {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function guardar(Usuario $usuario) {
        if ($usuario->id === null) {
            $sql = "INSERT INTO usuarios (nombre, apellidos, pass, fecha) VALUES (?, ?, ?, ?)";
            $stmt = $this->pdo->prepare($sql);
            return $stmt->execute([
                $usuario->nombre,
                $usuario->apellidos,
                $usuario->password,
                $usuario->fecha
            ]);
        } else {
            $sql = "UPDATE usuarios SET nombre = ?, apellidos = ?, pass = ?, fecha = ? WHERE id = ?";
            $stmt = $this->pdo->prepare($sql);
            return $stmt->execute([
                $usuario->nombre,
                $usuario->apellidos,
                $usuario->password,
                $usuario->fecha,
                $usuario->id
            ]);
        }
    }

    public function eliminar(int $id, int $sessionUserId) {
        if ($id === $sessionUserId) {
           echo ("No puedes eliminar el usuario logueado.");
        }else{
            $stmt = $this->pdo->prepare("DELETE FROM usuarios WHERE id = ?");
            var_dump($stmt->rowCount());
            $stmt->execute([$id]);
            if($stmt->rowCount() > 0){
                echo "Usuario con ID " . htmlspecialchars($id) . " eliminado correctamente.<br>";
            }
            return true;
        }
        return false;
    }

    public function buscarPorId(int $id): ?Usuario {
        $stmt = $this->pdo->prepare("SELECT * FROM usuarios WHERE id = ?");
        $stmt->execute([$id]);
        $datos = $stmt->fetch();
        if ($datos) {
            return new Usuario(
                $datos['nombre'],
                $datos['apellidos'],
                $datos['pass'],
                $datos['fecha'],
                $datos['id']
            );
        }
        return null;
    }

    public function buscarPorNombre(string $nombre): ?Usuario {
    $stmt = $this->pdo->prepare('SELECT * FROM usuarios WHERE nombre = ?');
    $stmt->execute([$nombre]);
    $datos = $stmt->fetch();
    if ($datos) {
        return new Usuario(
            $datos['nombre'],
            $datos['apellidos'],
            $datos['pass'],
            $datos['fecha'],
            $datos['id']
        );
    }
    return null;
    }


    public function listarTodos(): array {
        $stmt = $this->pdo->query("SELECT * FROM usuarios");
        $usuarios = [];
        while ($fila = $stmt->fetch()) {
            $usuarios[] = new Usuario(
                $fila['nombre'],
                $fila['apellidos'],
                $fila['pass'],
                $fila['fecha'],
                $fila['id']
            );
        }
        return $usuarios;
    }
}
?>

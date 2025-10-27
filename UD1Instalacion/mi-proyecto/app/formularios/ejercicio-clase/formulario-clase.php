<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        define('USER_CORRECTO', 'admin');
        define('PASS_CORRECTO', '1234');

    if(isset($_POST["boton"])){  //($_POST['boton']??'' === 'enviado'){
            $usuario = $_POST['usuario']??'';
            $password = $_POST['password']??'';

            $errores = [];

            if (empty($usuario)) {
                $errores['usuario'] = "El campo usuario es obligatorio.";
            }

    

            if (empty($password)) {
                $errores['password'] = "El campo contraseña es obligatorio.";
            }

            if (empty($errores)) {
                echo "Formulario enviado correctamente.";
        }else{
            echo "Por favor, rellena el formulario";
        }
    }
    ?>
    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <div>
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario">
        <p> <?= isset($errores['usuario']) ? $errores['usuario'] : '' ?> </p>
        <!-- Aquí deberás mostrar el error si el usuario está vacío -->
        </div>
        <br>
        <div>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password">
        <p> <?= isset($errores['password']) ? $errores['password'] : '' ?> </p>
        <!-- Aquí deberás mostrar el error si la contraseña está vacía -->
        </div>
        <br>
        <button type="submit" value="enviado" name="boton">Entrar</button>
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="recoger.php" method="post">
        Nombre : * <input type="text" name="nombre" >
        Dirección : * <input type="text" name="dir" value="12314s" >
        Teléfono : * <input type="text" name="tel"><br>
        Condiciones : * <input type="checkbox" name="condiciones" value="on">
        <input type="submit" name="bt_enviar">
    </form>

    <a href="recoger.php?nombre=Juan">Enviar por GET</a>
</body>
</html>
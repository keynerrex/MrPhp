<?php
if ($_POST) {
    $nombre = $_POST['Nombre'];
    $apellido = $_POST['Apellido'];

    echo "Hola " . $nombre . " " . $apellido;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>PHP STRING Y CONCADENACION</h1>
    <p>Hola Keyner</p>
    <form action="" method="post">
        <p>Nombre</p>
        <input type="text" name="Nombre" id="nombre">
        <br>
        <p>Apellido</p>
        <input type="text" name="Apellido" id="apellido">
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>
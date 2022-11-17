<!-- !! document html -->

<?php
//Metodo POST
//Recibir informacion del formulario html

//Si hace un envio lo imprime
if ($_POST) {
    $nombre = $_POST['Nombre'];
    echo "Hola " . $nombre; //Imprimir nombre que escriba
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
    <h1>PHP METODO POST</h1>
    <p>Hola Keyner</p>
    <form action="metodoPost.php" method="post">
        <p>Nombre</p>
        <input type="text" name="Nombre" id="nombre">
        <br>
        <input type="submit" value="Enviar">


    </form>
</body>

</html>
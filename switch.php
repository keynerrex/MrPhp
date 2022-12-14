<?php
if ($_POST) {
    $boton = $_POST['btnValor1'];
    //Metodo Switch
    switch ($boton) {
        case 1:
            echo "Se presiono el boton 1";
            break;
        case 2:
            echo "Se presiono el boton 2";
            break;
        case 3:
            echo "Se presiono el boton 3";
            break;
        default:

            break;
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>

<body>
    <form action="switch.php" method="post">
        <input type="submit" name="btnValor1" value="1">
        <br>
        <input type="submit" name="btnValor1" value="2">
        <br>
        <input type="submit" name="btnValor1" value="3">
    </form>
</body>

</html>
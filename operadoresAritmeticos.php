<?php
if ($_POST) {
    //Operaciones Basicas
    $valorA = $_POST['valorA'];
    $valorB = $_POST['valorB'];

    $suma = $valorA + $valorB;
    $resta = $valorA - $valorB;
    $divi = $valorA / $valorB;
    $mult = $valorA * $valorB;

    echo "<br>" . $suma;
    echo "<br>" . $resta;
    echo "<br>" . $divi;
    echo "<br>" . $mult;
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OPERADORES ARITMETICOS</title>
</head>

<body>
    <form action="" method="post">
        Valor A:
        <input type="text" name="valorA" id="">
        <br>
        VALOR B:
        <input type="text" name="valorB" id="">
        <br>
        <input type="submit" name="Enviar" id="">


    </form>
</body>

</html>
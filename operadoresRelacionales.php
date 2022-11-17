<?php
if ($_POST) {
    //Operaciones Relacionales
    $valorA = $_POST['valorA'];
    $valorB = $_POST['valorB'];

    if ($valorA > $valorB) {
        echo "El valor de A es mayor que B";
    } else if ($valorA == $valorB) {
        echo "El valor de A es igual al valor de B";
    }
    else{
        echo "El  valor de A es menor que B";
    }
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
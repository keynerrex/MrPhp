<?php

$frutas = array("Fresa", "Pera", "Manzana");

print_r($frutas);

//Leer array
echo "<br>" . $frutas[1] . "<br/>";


for ($indice = 0; $indice < 3; $indice++) {
    echo $frutas[$indice] . "<br/>";
}



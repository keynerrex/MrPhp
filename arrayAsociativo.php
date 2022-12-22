<?php

$frutas = array("f" => "fresa", "p" => "Pera", "m" => "Manzana");

print_r($frutas);

//leer array
echo "<br>" . $frutas["p"];

foreach ($frutas as $indice => $valor) {

    echo $indice . "Tiene el indice: " . $indice . "<br/>";

    // echo $frutas[$indice] . "<br/>";
}

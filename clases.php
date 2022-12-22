<?php

class Persona
{
    public $nombre;
    public function asignarNombre($nuevoNombre)
    { //acciones o metodos

        $this->nombre = $nuevoNombre;
    }
}

$objetoAlumno = new Persona(); //instancia - creacion objeto
$objetoAlumno->asignarNombre("Keyner");

echo $objetoAlumno->nombre; //Imprimir una propiedad

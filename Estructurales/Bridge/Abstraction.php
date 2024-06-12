<?php

require_once "Implementations/IImplementation.php";

// Se usa para separar la abstraccion(que logica seguir) de la implementacion (como se hace)
class Abstraction
{
    protected IImplementation $implementation; // Aqui se guarda la implementacion de lo que sea que se quiera hacer

    public function __construct(IImplementation $implementation)
    {
        $this->implementation = $implementation;
    }

    // Lo normal es que no sea tan simple, pero para el ejemplo es suficiente
    // Podriamos hacer un metodo que haga algo mas complejo, como tooglear la tele, si esta encendida la apaga y si esta apagada la enciende
    // Lo importante es que la logica avanzada esta aqui y la implementacion de como hacerlo esta en la implementacion
    public function encender()
    {
        return $this->implementation->encender();
    }

    public function apagar()
    {
        return $this->implementation->apagar();
    }
}
?>
<?php
require_once 'IStrategy.php';

// Mantenemos una referencia a la estrategia que se va a utilizar
// y delegamos la ejecución de la estrategia a la estrategia concreta
class Context
{
    private $strategy;

    public function __construct(IStrategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function executeStrategy($datos)
    {
        $this->strategy->execute($datos);
    }
}

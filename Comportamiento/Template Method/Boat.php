<?php
require_once 'AbstractClass.php';

// Sobreescribimos los métodos que sean necesarios
class Boat extends AbstractClass
{
    protected function primitiveOperation1()
    {
        echo "Barco: Iniciando el motor<br>";
    }

    protected function primitiveOperation2()
    {
        echo "Barco: Navegando<br>";
    }
}

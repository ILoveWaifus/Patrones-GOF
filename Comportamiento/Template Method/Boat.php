<?php

require_once 'AbstractClass.php';

class Boat extends AbstractClass
{
    protected function primitiveOperation1()
    {
        echo "Boat: Iniciando el motor\n";
    }

    protected function primitiveOperation2()
    {
        echo "Boat: Navegando\n";
    }
}
?>
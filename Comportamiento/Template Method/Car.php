<?php
require_once 'AbstractClass.php';

// Sobreescribimos los métodos que sean necesarios
class Car extends AbstractClass
{
    protected function primitiveOperation1()
    {
        echo "Coche: Encendiendo el motor<br>";
    }

    protected function primitiveOperation2()
    {
        echo "Coche: Conduciendo<br>";
    }
}

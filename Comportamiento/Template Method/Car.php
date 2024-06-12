<?php

require_once 'AbstractClass.php';

class Car extends AbstractClass
{
    protected function primitiveOperation1()
    {
        echo "Car: Encendiendo el motor\n";
    }

    protected function primitiveOperation2()
    {
        echo "Car: Conduciendo\n";
    }
}
?>
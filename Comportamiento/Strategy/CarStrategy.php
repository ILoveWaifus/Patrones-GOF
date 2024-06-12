<?php
class CarStrategy implements IStrategy
{
    public function execute($datos)
    {
        echo "Car strategy: " . $datos . "<br>";
    }
}
?>
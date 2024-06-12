<?php
class CarStrategy implements IStrategy
{
    public function execute($datos)
    {
        echo "Estrategia Coche: " . "., ., ., ., ., " . $datos . "<br>";
    }
}

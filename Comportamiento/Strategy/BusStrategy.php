<?php
class BusStrategy implements IStrategy
{
    public function execute($datos)
    {
        echo "Estrategia Bus: " . "., ., ., ., ., ., ., ., ., ., " . $datos . "<br>";
    }
}

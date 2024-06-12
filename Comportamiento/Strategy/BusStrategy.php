<?php
class BusStrategy implements IStrategy
{
    public function execute($datos)
    {
        echo "Bus strategy: " . $datos . "<br>";
    }
}
?>
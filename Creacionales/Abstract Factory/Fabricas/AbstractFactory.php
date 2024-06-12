<?php
// OJO! esta vez la responsiblidad es de crear, no tiene logica de negocio
// MUY IMPORTANTE: debe existir un metodo de creacion por cada familia de productos y debe existir siempre un objeto familiar de cada tipo
// Ej: No podriamos tener solo un coche ferrari sabiendo que hay un barco mercedes, debe existir un coche mercedes tambien
abstract class AbstractFactory
{
    abstract public function createCar() : AbstractCar;

    abstract public function createShip() : AbstractShip;
}
?>
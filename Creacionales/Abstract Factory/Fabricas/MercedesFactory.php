<?php
require_once 'Fabricas/AbstractFactory.php';
require_once 'Fabricas/Products/AbstractCar.php';
require_once 'Fabricas/Products/AbstractShip.php';
require_once 'Fabricas/Products/MercedesCar.php';
require_once 'Fabricas/Products/MercedesShip.php';

class MercedesFactory extends AbstractFactory
{
    public function createCar() : AbstractCar
    {
        return new MercedesCar();
    }

    public function createShip() : AbstractShip
    {
        return new MercedesShip();
    }
}

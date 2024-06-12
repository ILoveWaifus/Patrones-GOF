<?php

require_once 'Fabricas/AbstractFactory.php';
require_once 'Fabricas/Products/AbstractCar.php';
require_once 'Fabricas/Products/AbstractShip.php';
require_once 'Fabricas/Products/FerrariCar.php';
require_once 'Fabricas/Products/FerrariShip.php';
class FerrariFactory extends AbstractFactory
{
    public function createCar() : AbstractCar
    {
        return new FerrariCar();
    }

    public function createShip() : AbstractShip
    {
        return new FerrariShip();
    }
}
?>
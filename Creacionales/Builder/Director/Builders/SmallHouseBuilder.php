<?php
require_once 'Director/Builders/IBuilder.php';
require_once 'Director/Builders/Products/SmallHouse.php';

class SmallHouseBuilder implements IBuilder
{
    private $smallHouse;

    public function __construct()
    {
        $this->smallHouse = new SmallHouse();
    }

    public function buildWalls($number)
    {
        $this->smallHouse->setWalls($number);
    }

    public function buildSwimmingPool($number)
    {
        // No se hace nada, no hay piscina en la casa pequeña
    }

    public function getResult()
    {
        return $this->smallHouse;
    }
}

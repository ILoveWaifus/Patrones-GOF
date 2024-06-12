<?php

require_once 'Director/Builders/IBuilder.php';
require_once 'Director/Builders/Products/BigHouse.php';

class BigHouseBuilder implements IBuilder
{
    private $bigHouse;

    public function __construct()
    {
        $this->bigHouse = new BigHouse();
    }

    public function buildWalls($number)
    {
        $this->bigHouse->setWalls($number);
    }

    public function buildSwimmingPool($number)
    {
        $this->bigHouse->setSwimmingPool($number);
    }

    public function getResult()
    {
        return $this->bigHouse;
    }
}
?>
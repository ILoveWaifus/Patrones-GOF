<?php

require_once 'Director/Builders/IBuilder.php';

class Director
{
    private $builder;

    public function __construct(IBuilder $builder)
    {
        $this->builder = $builder;
    }

    public function buildSmallHouse()
    {
        $this->builder->buildWalls(4);
        return $this->builder->getResult();
    }

    public function buildBigHouse()
    {
        $this->builder->buildWalls(8);
        $this->builder->buildSwimmingPool(1);
        return $this->builder->getResult();
    }
}

?>
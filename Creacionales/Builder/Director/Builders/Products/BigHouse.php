<?php
// OJO! es un ejemplo, lo normal es que haya muchos mas atributos y metodos, diferencio casa grande de casa pequeña por el atributo swimmingPool
class BigHouse
{
    private $walls;
    private $swimmingPool;

    public function setWalls($walls)
    {
        $this->walls = $walls;
    }

    public function setSwimmingPool($swimmingPool)
    {
        $this->swimmingPool = $swimmingPool;
    }

    public function printHouse()
    {
        echo "Casa grande:<br>";
        echo "- Paredes: $this->walls<br>";
        echo "- Piscina: $this->swimmingPool<br>";
    }
}

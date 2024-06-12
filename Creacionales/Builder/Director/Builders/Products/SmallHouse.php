<?php
// OJO! es un ejemplo, lo normal es que haya muchos mas atributos y metodos
class SmallHouse
{
    private $walls;

    public function setWalls($walls)
    {
        $this->walls = $walls;
    }

    public function printHouse()
    {
        echo "Casa pequeña:<br>";
        echo "- Paredes: $this->walls<br>";
    }
}

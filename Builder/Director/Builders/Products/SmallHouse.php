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
        echo "Small House\n";
        echo "Walls: $this->walls\n";
    }
}
?>
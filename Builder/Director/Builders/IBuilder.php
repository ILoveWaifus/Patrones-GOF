<?php

// OJO! debemos tener un metodo para cada parte unica o comun de las casas, en este caso solo hay una parte unica, la piscina
interface IBuilder
{
    public function buildWalls($number);
    public function buildSwimmingPool($number);
    public function getResult();
}
?>
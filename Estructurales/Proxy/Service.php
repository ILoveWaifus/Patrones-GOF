<?php
require_once 'ServiceInterface.php';

class Service implements ServiceInterface
{

    public function __construct()
    {
        // This constructor is intentionally left empty.
    }

    public function sum($a, $b)
    {
        return $a + $b;
    }

    public function multiply($a, $b)
    {
        return $a * $b;
    }
}

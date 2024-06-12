<?php

require_once "IAdapter.php";

class Adapter implements IAdapter
{
    private $service;
    
    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    // OJO! si el metodo something devuelve un formato diferente al de deliver, se debe adaptar tambien
    public function deliver()
    {
        return $this->service->something();
    }
}
?>
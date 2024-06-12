<?php
require_once "IAdapter.php";

class Adapter implements IAdapter
{
    private $service;
    
    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    // El adaptador se encarga de adaptar el metodo something de la clase Service para que se comporte como deliver de la clase Coche
    // En este caso modificando el formato del texto que devuelve par que se parezca al de la clase Coche
    public function deliver()
    {
        $data = $this->service->something();
        return str_replace(".", "", $data);
    }
}

<?php
require_once 'ServiceInterface.php';
require_once 'Service.php';

// Debe implementar la misma interfaz que el servicio real, se intenta camuflar
// Podemos hacer muchas cosas antes o después de la petición al servicio real
// Registrar peticiones, controlar el acceso, guardar en cache, ejecucion local, etc
class Proxy implements ServiceInterface
{
    private $service;
    private $nrequest;

    public function __construct()
    {
        $this->service = new Service();
    }

    // El proxy permite realizar acciones adicionales antes o después de la petición al servicio real
    public function sum($a, $b)
    {
        $this->nrequest++;
        return $this->service->sum($a, $b);
    }

    public function multiply($a, $b)
    {
        $this->nrequest++;
        return $this->service->multiply($a, $b);
    }

    public function printRequest()
    {
        echo 'Request number: ' . $this->nrequest;
    }
}

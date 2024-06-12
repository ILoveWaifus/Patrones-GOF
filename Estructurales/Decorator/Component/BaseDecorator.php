<?php
require_once 'Component/IComponent.php';

// El decorador base implementa la interfaz IComponent
// Guarda una referencia al componente envuelto, sera al que le añadiremos funcionalidad
class BaseDecorator implements IComponent
{
    protected $wrappee;

    public function __construct(IComponent $component)
    {
        $this->wrappee = $component;
    }

    public function execute()
    {
        return $this->wrappee->execute();
    }
}

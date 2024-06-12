<?php
require_once "Component/IComponent.php";

// En nuestro caso, un Composite es un componente el cual tiene hijos, los cuales pueden tener hijos o no
class Bolsa implements IComponent
{
    private $objetos = array();
    public function contarObjetos()
    {
        $total = 0;
        foreach ($this->objetos as $objeto)
        {
            $total += $objeto->contarObjetos();
        }
        return $total;
    }

    public function addObjeto(IComponent $objeto)
    {
        $this->objetos[] = $objeto;
    }
}

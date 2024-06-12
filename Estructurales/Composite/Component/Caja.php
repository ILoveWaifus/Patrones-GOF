<?php
require_once "Component/IComponent.php";

// Esta clase es un Composite, ya que tiene hijos
class Caja implements IComponent
{
    private $objetos = array();

    // Lo normal es que un Composite haga el menor trabajo posible y delegue la responsabilidad a sus hijos
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

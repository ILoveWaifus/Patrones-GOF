<?php
require_once "Component/IComponent.php";

// En nuestro caso, un Composite es un componente el cual tiene hijos, los cuales pueden tener hijos o no
class Composite implements IComponent
{
    private $familiares = array();

    // Lo normal es que un Composite haga el menor trabajo posible y delegue la responsabilidad a sus hijos
    // Quizas el ejemplo no sea el mejor, pero es lo que se me ocurrio
    public function contarFamiliares()
    {
        $total = 1; // Contamos a la persona con hijos
        foreach ($this->familiares as $familiar) {
            $total += $familiar->contarFamiliares();
        }
        return $total;
    }

    public function addFamiliar(IComponent $familiar)
    {
        $this->familiares[] = $familiar;
    }
}
?>
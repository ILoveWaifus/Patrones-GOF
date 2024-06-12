<?php

// En nuestro caso, un Leaf es un componente el cual no tiene hijos
class Leaf implements IComponent
{
    public function contarFamiliares()
    {
        return 1;
    }
}
?>
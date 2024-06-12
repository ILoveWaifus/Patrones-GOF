<?php

// En nuestro caso, un Leaf es un componente el cual no tiene hijos
class Objeto implements IComponent
{
    public function contarObjetos()
    {
        return 1;
    }
}

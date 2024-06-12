<?php
abstract class AbstractClass
{
    // El template method define el esqueleto de un algoritmo
    final public function templateMethod()
    {
        $this->primitiveOperation1();
        $this->primitiveOperation2();
    }

    // Se definen los pasos del algoritmo
    abstract protected function primitiveOperation1();
    abstract protected function primitiveOperation2();
}

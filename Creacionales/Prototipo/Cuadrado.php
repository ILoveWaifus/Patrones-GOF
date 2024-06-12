<?php
class Cuadrado implements IPrototype
{
    // OJO! en este caso solo tenemos un metodo por lo que seria overkill usar un patron
    // Normalmente este patron se usa cuando tenemos muchos atributos y queremos clonar el objeto
    private $lado;
    
    public function __construct($lado)
    {
        $this->lado = $lado;
    }
    
    public function printObjeto()
    {
        echo "Cuadrado con lado: " . $this->lado . "<br>";
    }
    
    public function clone()
    {
        return new Cuadrado($this->lado);
    }
}

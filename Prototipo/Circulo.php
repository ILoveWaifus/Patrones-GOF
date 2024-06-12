<?php
class Circulo implements IPrototype
{
    // OJO! en este caso solo tenemos un metodo por lo que seria overkill usar un patron
    // Normalmente este patron se usa cuando tenemos muchos atributos y queremos clonar el objeto
    private $radio;
    
    public function __construct($radio)
    {
        $this->radio = $radio;
    }
    
    public function printObjeto()
    {
        echo "Circulo con radio: " . $this->radio . "<br>";
    }
    
    public function clone()
    {
        return new Circulo($this->radio);
    }
}
?>
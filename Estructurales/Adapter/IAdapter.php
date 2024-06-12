<?php
interface IAdapter
{
    // Este metodo es el que se va a adaptar
    // No queremos programar el codigo de como un avion se mueve de un punto A a un punto B
    // Queremos adaptar el metodo something de la clase Service para que se comporte como deliver de la clase Car
    public function deliver(); 
}
?>
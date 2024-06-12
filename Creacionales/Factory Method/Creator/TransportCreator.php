<?php

class TransportCreator // Esta clase puede ser o no abstracta, en este caso he decicido que no lo sea, y el metodo por defecto es usar un coche
{
    protected ITransport $transport;

    // OJO! la clase creadora, esta y sus hijas no tienen como funcion principal crear, sino entregar, logica de negocio. Si su objetivo principal fuera crear, seria abstract factory, aunque son bastante parecidos
    public function deliver($direccion) 
    {
        // Devolveremos la direccion y el tipo de transporte
        return $direccion . " with " . $this->transport->deliver();
    }

    public function createTransport()
    {
        $this->transport = new Car();
    }
}
?>
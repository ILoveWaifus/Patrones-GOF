<?php
class CarCreator extends TransportCreator
{
    public function createTransport()
    {
        $this->transport = new Car();
    }
}
?>
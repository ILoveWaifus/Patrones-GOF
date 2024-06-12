<?php
class ShipCreator extends TransportCreator
{
    public function createTransport()
    {
        $this->transport = new Ship();
    }
}
?>
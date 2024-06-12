<?php
interface ITransport // Un transporte siempre debe poder entregar algo
{
    public function deliver();
}
?>
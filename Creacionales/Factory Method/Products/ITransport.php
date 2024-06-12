<?php
// Un transporte siempre debe poder entregar algo
interface ITransport
{
    public function deliver();
}

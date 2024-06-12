<?php
// El cliente podra clonar todos los objetos que implementen esta interfaz
// Lo normal es que solo tenga un metodo clone que devuelva un clon del objeto, pero puede tener mas metodos si es necesario
interface IPrototype
{
    public function clone();
}

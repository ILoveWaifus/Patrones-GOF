<?php
require_once "IState.php";
class IdleState implements IState
{
    public function start()
    {
        echo "<strong>Parado:</strong> Iniciando<br>";
    }

    public function update()
    {
        echo "<strong>Parado:</strong> Actualizando<br>";
    }

    public function end()
    {
        echo "<strong>Parado:</strong> Finalizando<br>";
    }
}

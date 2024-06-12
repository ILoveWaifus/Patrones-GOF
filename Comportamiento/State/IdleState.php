<?php

require_once "IState.php";
class IdleState implements IState
{
    public function start()
    {
        echo "IdleState: Iniciando\n";
    }

    public function update()
    {
        echo "IdleState: Actualizando\n";
    }

    public function end()
    {
        echo "IdleState: Finalizando\n";
    }
}
?>
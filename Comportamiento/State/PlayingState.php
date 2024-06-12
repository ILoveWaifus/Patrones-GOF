<?php
require_once "IState.php";

class PlayingState implements IState
{
    public function start()
    {
        echo "<strong>En movimiento:</strong> Iniciando<br>";
    }

    public function update()
    {
        echo "<strong>En movimiento:</strong> Actualizando<br>";
    }

    public function end()
    {
        echo "<strong>En movimiento:</strong> Finalizando<br>";
    }
}


<?php
require_once "IState.php";

class PlayingState implements IState
{
    public function start()
    {
        echo "PlayingState: Iniciando\n";
    }

    public function update()
    {
        echo "PlayingState: Actualizando\n";
    }

    public function end()
    {
        echo "PlayingState: Finalizando\n";
    }
}
?>

<?php
class Invoker
{
    private $commands = [];

    public function addCommand(ICommand $command)
    {
        $this->commands[] = $command;
    }

    public function run()
    {
        foreach ($this->commands as $command) {
            $command->execute();
        }
    }

    // Tambien se puede implementar un metodo para deshacer los comandos
}

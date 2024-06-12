<?php
interface IState
{
    public function start();
    public function update();
    public function end();
}

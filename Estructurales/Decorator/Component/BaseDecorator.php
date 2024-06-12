<?php
require_once 'Component/IComponent.php';

class BaseDecorator implements IComponent
{
    protected $wrappee;

    public function __construct(IComponent $component)
    {
        $this->wrappee = $component;
    }

    public function execute()
    {
        return $this->wrappee->execute();
    }
}
?>
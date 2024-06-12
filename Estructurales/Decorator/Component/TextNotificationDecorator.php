<?php
require_once 'Component/BaseDecorator.php';

class TextNotificationDecorator extends BaseDecorator
{
    public function execute()
    {
        return 'Texto - ' . $this->wrappee->execute();
    }
}

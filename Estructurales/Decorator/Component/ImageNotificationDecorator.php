<?php
require_once 'Component/BaseDecorator.php';

class ImageNotificationDecorator extends BaseDecorator
{
    // Fijaros que lo que hacemos es añadir una imagen a la notificación
    // El objetivo es que el decorador añada funcionalidad al wrappee
    public function execute()
    {
        return 'Imagen - ' . $this->wrappee->execute();
    }
}

<?php

require_once 'IEventListeners.php';
class EmailAlertsListener implements IEventListeners
{
    // Si el archivo cambia, se envía un email de alerta
    public function update($filename)
    {
        echo "EmailAlertsListener: Enviando email de alerta para el archivo: $filename\n";
    }
}

?>
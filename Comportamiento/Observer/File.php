<?php
class File
{
    private $filename;
    private $publisher;
    public function __construct($filename, $publisher)
    {
        $this->filename = $filename;
        $this->publisher = $publisher;
    }

    // Al guardar un archivo, notificar a los suscriptores
    // Estos tienen funciones que se ejecutan cuando se notifica
    public function save()
    {
        // echo "File: Guardando archivo en disco<br>";
        // echo "File: Notificando a los suscriptores<br>";
        $this->publisher->notify($this->filename);
    }
}

<?php
require_once 'Subsistema/Compression.php';
require_once 'Subsistema/Mp.php';
require_once 'Subsistema/AudioMixer.php';

class Facade
{
    private $compression;
    private $mp;
    private $audioMixer;

    public function __construct()
    {
        $this->compression = new Compression();
        $this->mp = new Mp();
        $this->audioMixer = new AudioMixer();
    }

    // La parte complicada de la lógica de negocio se esconde detrás de un método sencillo
    // que no requiere conocimientos técnicos para ser utilizado.
    public function convert($file)
    {
        $this->compression->compress($file);
        $this->mp->cut($file);
        $this->audioMixer->fix($file);
    }
}

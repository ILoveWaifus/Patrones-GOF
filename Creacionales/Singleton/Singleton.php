<?php
class Singleton
{
    private static $instance = null;
    
    // El constructor es privado para evitar que se pueda instanciar la clase
    private function __construct()
    {
        
    }
    
    // Metodo para obtener la instancia de la clase, se creara una unica vez si la instancia es null
    public static function getInstance()
    {
        if (self::$instance == null)
        {
            self::$instance = new Singleton();
        }
        
        return self::$instance;
    }
}

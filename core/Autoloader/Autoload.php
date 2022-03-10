<?php

class Autoload {
    
    public static function autoloader (string $class)
    {        
        $class = str_replace("\\", "/", $class);
        require ROOT. "/$class.php";
    }

    public static function register ()
    {
        spl_autoload_register([__CLASS__, "autoloader"]);
    }
}
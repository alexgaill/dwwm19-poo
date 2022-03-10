<?php

class Autoload {
    
    public function autoloader (string $class)
    {        
        $class = str_replace("\\", "/", $class);
        require ROOT. "/$class.php";
    }

    public function register ()
    {
        spl_autoload_register([__CLASS__, "autoloader"]);
    }
}
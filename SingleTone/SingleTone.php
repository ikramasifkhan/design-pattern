<?php

class SingleTone{
    public static $instance = null;

    private function __construct(){}

    public static function getInstances(){
        $className = get_called_class();

        if(static::$instance === null){
            static::$instance = new static();
        }
        if(static::$instance !== $className){
            static::$instance = new static();
        }

        return static::$instance;
    }

    private function __clone()
    {
        
    }

    private function __wakeup()
    {
        
    }
}
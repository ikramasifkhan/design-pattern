<?php

require "Person.php";

class Fecade{
    public static function __callStatic($name, $arguments)
    {
        return (new Person())->{$name}(...$arguments);
    }
}
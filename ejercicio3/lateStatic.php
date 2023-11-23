<?php 
class A{
    public static function quien(){
        echo __CLASS__;
    }
    public static function test(){
        self::quien(); // Aquí self se refiere a 'A'
        static::quien(); // Aquí static se refiere a la clase que se invoca en el rentine
    }
}

class B extends A{
    public static function quien(){
        echo __CLASS__;
    }
}

A::test();
B::test();
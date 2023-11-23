<?php 
class Utilidades{
    public static function saludar($nombre){
        return "Hola, " .$nombre . "!";
    }
}

echo Utilidades::saludar("Mundo"); //Salida: Hola, Mundo!
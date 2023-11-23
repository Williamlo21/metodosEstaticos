<?php 
class ClasePadre{
    protected static $valor = 'hola';
    public static function getValor(){
        return static::$valor;
    }
}

class ClaseHija extends ClasePadre{
    public static function mostrarValor(){
        // Accede directamente a la propiedad estatica protegida
        echo static::$valor;

        //O a travez de un metodo getter si la propiedad fuera privada
        echo static::getValor(); 
    }
}

ClaseHija::mostrarValor(); // Salida: hola
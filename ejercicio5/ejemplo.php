<?php 
class Ejemplo{
    public static function metodoEstatico(){
        echo "llamada a metodo estatico.\n";
    }

    public static function otroMetodoEstatico(){
        //Llamada dentro de la clase utilizando self::
        self::metodoEstatico();

        // O usando static:: para respetar el Late Static Binding
        static::metodoEstatico();
    }
}

//Ejemplo::otroMetodoEstatico(); // Llamada a metodo estatico.

class EjemploHijo extends Ejemplo{
    public static function metodoEstatico(){
        echo "Llamada a metodo estatico sobrescrito en hijo.\n";
    }
}

Ejemplo::otroMetodoEstatico();
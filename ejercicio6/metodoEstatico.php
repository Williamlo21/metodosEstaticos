<?php 
class ClaseA{
    public static function metodoEstaticoA(){
        echo "Metodo Estatico de ClaseA\n";
    }
}

class ClaseB{
    public static function metodoEstaticoB(){
        // Llamada a un metodo estatico de otra clase desde un metodo estatico
        ClaseA::metodoEstaticoA();
    }
}

ClaseB::metodoEstaticoB(); // Salida: metodo estatico de ClaseA
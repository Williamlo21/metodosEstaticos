<?php 
class Utilidades{
    public static function saludar($nombre){
        return "Hola, " .$nombre . "!";
    }
}

class OtraClase{
    public function demo(){
        // Llamada a un metodo estatico de otra clase
        echo Utilidades::saludar("pedro");
    }
}

//crear una instancia de OtraClase y llamar a demo()
$instancia = new OtraClase();
$instancia->demo(); // Salida: hola, pedro!
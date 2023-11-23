<?php 
class Conexion{
    public static $contadorConexion = 0;
    public function __construct(){
        static::$contadorConexion++;
    }
}

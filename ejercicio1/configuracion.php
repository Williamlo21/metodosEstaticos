<?php 
class Configuracion{
    public static $databaseName = "mi_base_de_datos";
    // Otros ajustes de configuracion...
}
// Acceder sin instanciar la clase
$dbName = Configuracion::$databaseName;
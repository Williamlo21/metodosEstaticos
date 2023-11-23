<?php 
class Contador{
    public static $cuenta = 0;
    public function incrementar(){
        self::$cuenta++;
        //$this->cuneta++;
        }
}

$contador = new Contador();
$contador->incrementar();
echo $contador::$cuenta. PHP_EOL; //imprime 1

$contador2 = new Contador();
$contador2->incrementar();

echo Contador::$cuenta . PHP_EOL; //Imprime 2
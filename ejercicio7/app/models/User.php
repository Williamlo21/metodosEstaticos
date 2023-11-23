<?php 
// /app/models/User.php

namespace App\Models;

class user{
    private $name;
    private static $count=0;

    public function __construct($name){
        $this->name =$name;
        self::$count++;
    }

    public function getName(){
        return $this->name;
    }

    public static function getCount(){
        return self::$count;
    }
}
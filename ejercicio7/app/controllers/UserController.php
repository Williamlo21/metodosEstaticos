<?php 
namespace App\Controllers;

use App\Models\user;

class UserController{
    public function create($name){
        $user = new user($name);
        require_once 'app/views/welcome.php';
    }
}
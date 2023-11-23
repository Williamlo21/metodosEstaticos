<?php 
// index.php

require_once 'app/models/User.php';
require_once 'app/controllers/UserController.php';

use App\Controllers\UserController;

$controller = new UserController();
$controller->create("Juan");
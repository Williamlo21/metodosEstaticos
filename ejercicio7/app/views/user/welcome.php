<?php 
// /app/views/user/welcome.php

//recibe $user de UserController
echo "Bienvenido, " . htmlspecialchars($user->getName()) . "!";
echo "<br />";
echo "Numero total de usuarios registrados: " . htmlspecialchars($user::getCount());
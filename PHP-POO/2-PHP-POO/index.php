<?php 

require_once __DIR__.'/Person.php';
require_once __DIR__.'/User.php';
require_once __DIR__.'/Admin.php';






#VARIABLE PARA CREAR EL OBJETO 
$user = new User;

# ELEGIMOS PARA QUE EL USUARIO SEA TIPO ADMINSTRADOR
$user->type = new Admin;

# LLAMO EL METODO DE SALUDAR
echo $user->type->greet();
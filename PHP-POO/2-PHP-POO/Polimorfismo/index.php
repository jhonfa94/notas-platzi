<?php








$guest = new Guest();
echo $guest->login() . "\n";

$user = new User('Jhon');
echo $user->login() . "\n";

$admin = new Admin('Fabio');
echo $admin->login();

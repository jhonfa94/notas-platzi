<?php

# final
class User
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    final public function getName()
    {
        return "Soy $this->name";
    }
}


class Admin extends User
{
   public function getName2()
    {
        return "Soy $this->name";
    }
}

$admin = new User('Jhon');
echo $admin->getName();

# Introducción a clases y objetos

Se puede resumir que la clase es un molde y a partir de ello puedo crear uno o varios objetos.

Para crear un objeto necesitamos crear una variable la cual utilizará la palabra reservada **new** para llamar a la clase y crear el objeto almacenado en la variable.

```
<?php

    class Person
    {
        public function greet(){
        return "Hola $this->name";
        }
    }

    class User
    {
        public $type;
    }

    class Admin extends Person
    {
        public $name  = 'Administrador';
    }

    #VARIABLE PARA CREAR EL OBJETO
    $user = new User;

    # ELEGIMOS PARA QUE EL USUARIO SEA TIPO ADMINSTRADOR
    $user->type = new Admin;

    # LLAMO EL METODO DE SALUDAR
    echo $user->type->greet();
?>
```

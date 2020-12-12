# Polimorfismo

Es la característica en POO que se presenta con mucha complejidad en **Internet**.

Básicamente significa varias formas, lo cual nos quiere decir que un mismo elemento si se comporta de varias maneras y otorga diferentes resultados aplica el término de polimorfismo. Se puede implementar en cualquier área.

Un ejemplo sería cuando tenemos en el sistema un módulo de comentarios y se guarda en la tabla de la base de datos, pero esta tabla tambien almacena diferentes tipos de comentarios, nos lleva a decir que es una tabla poliformica porque esta guardando comentarios de diferentes tipos, sea de productos, generales, precios demás.

```
<?php

    abstract class Base
    {

        protected $name;

        private function getClassName()
        {
            return get_called_class();
        }

        public function login()
        {
            return "Mi nombre es $this->name desde la clase {$this->getClassName()}";
        }

       
    }

    class Admin extends Base
    {
        public function __construct($name)
        {
            $this->name = $name;
        }
    }

    class User extends Base
    {
        public function __construct($name)
        {
            $this->name = $name;
        }
    }

    class Guest extends Base
    {
        protected $name = 'Invitado';
    }

    $guest = new Guest();
    echo $guest->login() . "\n";

    $user = new User('Jhon');
    echo $user->login() ."\n";

    $admin = new Admin('Fabio');
    echo $admin->login();
?>
```

***Nota:*** La "\n" se utiliza como salto de línea en la consola. 
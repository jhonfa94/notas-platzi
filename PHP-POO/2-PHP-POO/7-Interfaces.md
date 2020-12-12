# Interfaces

Se desarrolla y se implementa en una clase, al ser implementada estamos obligados a desarrollar todos los métodos que la interfaz define.

Se puede considerar como:

- El que se va hacer, se define en una **interface**.
- El como se va hacer en una implementación se define en una **clase**.

Podemos resumir que una **_interface_** es un contracto donde nos indica como debemos desarrollar los métodos que se tienen.

En la interface definimos los diferentes métodos que quiero que sean obligatorios dentro de una clase.

```
<?php
    // Contractamos
    interface Person
    {
        public function getName();
    }

    class Admin implements Person
    {
        public $name;

        public function __construct($name)
        {
            $this->name = $name;
        }

        public function getName()
        {
            return $this->name;
        }
    }


    $admin = new Admin('Lynda');
    echo $admin->getName();
?>
```

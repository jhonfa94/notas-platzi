# Herencia

Nos permite heredar los métodos de la clase padre o madre a las subclases hijas.

Con la palabra **final** no podemos sobreescribir los métodos de la clase padre o madre.

Cuando declaramos una clase con la palabra **final** nos indica que esa clase no se puede heredar, por lo que se presentara un error al momento de ejecutar el código. De esta forma se evitaría la herencia de la clase.

La clase abstracta no se puede instanciar, pero una final si se puede instanciar.

En conclusión una herencia es utilizar todo lo que la clase padre tiene definido, si esta clase padre tiene 5 métodos, estos los tendran las clases que se hereden a partir de allí.

```
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
?>
```

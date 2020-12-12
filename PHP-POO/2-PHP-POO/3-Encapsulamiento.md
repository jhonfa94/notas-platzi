# Alcance o Encapsulamiento

Hace referencia al encapsulamiento o principio de oculatación.
Nos ayuda cuando trabajamos con la herencia, para esto tenemos: 

- **Public**: Los elementos públicos son aquellos que se pueden acceder a lo largo de todo el sistema

- **Protected**: Solo pueden acceder los elementos de las clases que se heredan

- **Private**: Solo puede ser accedido a través de la misma clase.

Con lo anterior se garantiza la integridad de los datos.

```
<?php
    class User
    {
        // public
        // protected
        // private

        public const PAGINATE = 25;

        // public $username;
        // protected $username;
        // private $username;

        public function getUsername(){
            // ...
        }
    }
?>
```

# Introducción

Es la técnica que se utiliza en el lenguaje de programación de PHP y otros lenguajes, es muy fundamental para mejorar el pensamiento al momento de realizar un sistema de información. 

Para utilizar la programación orientada a objetos debo realizar los siguiente: 

- Crear la clase. 
- Luego de tener la clase creada instanciar la variable al objeto de la clase
- Reutilizar en cuanto sea necesaria. 

Al crear el la clase se puede interpretar como si fueses un molde que permitira crear muchos objetos a partir de el. 




```
<?php
    class User
    {
        public $type;
    }

    class Admin
    {
        public function greet()
        {
            return "Hola Administrador";
        }
    }

    $user = new User;
    $user->type = new Admin;
    echo $user->type->greet();
?>
```

Del anterior código se puede decir qu ese tiene una clase llamada **User** y otra llamada **Admin** donde esta clase tiene un método llamado ***greet***. 

Luego tener las clases creadas se crea una variable llamada **$user** el cual instancia la clase de **User**, posteriormente se instancia la clase **Admin** donde se hace impresión del método de ***greet***.
# Polimorfismo: interfaz

El polimorfismo es exactamente una cosa que tiene diferentes comportamientos, es una capacidad o virtud, que al tener un único elemento se comporta de diferentes maneras y que de acuerdo a su configuración arrojar diferentes resultados. 

Un ejemplo sería cuando tenemos un método get el cual nos puede retornar datos en json como en xml, nos lleva a decir que es polimorfismo.
Pues el mismo método se esta comportando de diferentes formas, otorgando diferentes resultados

```
<?php

    interface Search
    {
        public function all();
    }


    class User implements Search
    {
        public function all()
        {
            return "Obteniendo a los Usuarios, XML";
        }
    }

    class Post implements Search
    {
        public function all()
        {
            return "Obteniendo a los Post, JSON";
        }
    }

    # Creamos el objeto
    $user = new User();
    echo $user->all();


    $post = new Post();
    echo $post->all();

?>

```

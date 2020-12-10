# Encapsulamiento

![](https://static.platzi.com/media/user_upload/encapsulamiento-Modificadores%20de%20acceso-69d34fb4-21e0-405d-a572-712db3ea171c.jpg)

El encapsulamiento es hacer que un dato sea inviolable, inalterable cuando se le asigne un modificador de acceso (no se trata solo de ocultar el dato sino también de protegerlo). Un modificador de acceso define el alcance y visibilidad de un miembro de clase.
La encapsulacion es también llamada ocultamiento de información.
//
Algunos beneficios de encapsulación son:

Controlar la manera en que los datos son accedidos o modificados
El código es mas flexible y fácil de cambiar a partir de nuevos requerimientos
Poder modificar una parte del código sin afectar otras partes del mismo
Ayuda a mantener la integridad de los datos
//
Nota: esta información la obtuve de la app SoloLearn (en donde puedes aprender diferentes lenguajes de programación).

# Encapsulamiento:

Es hacer que los datos sean inviolables, inalterable o hacer que se esconda, cuando se le asigne un Modificador de Acceso.

Modificadores de Acceso:

- Public: Es el mas permisivos de todos, Accede a todo.
- Protected: Podrá ser accedido por la clase, paquetes y subclases.
- Default: Permite el acceso a nivel de clses de internas y paquetes (No podremos ver las herencias si ha detener (Osea subclases))
- Private: Solo podrá ser modificado dentro de la clase.

Se puede encapsular: elementos o atributos, clases o incluso métodos; El encapsulamiento nos permite tener dicho elemento inalterable en la POO.

# Encapsulamiento

El encapsulamiento es hacer que un dato se inviolable, o inalterable cuando se le asigne un modificador de acceso. Es nos ayudará a que no puedan meter datos que alteren la lógica de nuestro negocio.

Para esconder datos vamos a utilizar los modificadores de acceso:

Public → Puede ser accedido por todos, o seá por cualquier elemento o clase.
Protected → Podrá ser accedido a nivel de la clases, paquetes y Subclases (las clases hijas ← clases padres).
Defaulf → Este nos permite el acceso a nivel de clases y paquetes. O sea, que a nivel de herencia no puede ser accedido.
Private → Solo puede ser accedido a nivel e clases, esto quiere decir, que solo puedes ser modificado a nivel e la clase.
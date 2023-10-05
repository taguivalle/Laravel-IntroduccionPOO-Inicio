<?php
include 'includes/header.php';
/* Aquí se inicia con los atributos de una clase y los atributos junto a las funciones que va a tener una 
clase son los que conforman parte de la primera piedra angular que se le llama como ABSTRACCIÓN; es la
correcta definición de qué datos, de qué funciones va a tener una clase que estemos creando. A esto se le conoce como
abstración*/
class Empleado {
    /* Inicialmente aquí vamos crear una clase empleado con unos atributos que pueda tener un empleado, y ¿que atributos 
    puede tener un empleado? los que se encuentran en el siguiente bloque son algunos de esos atributos que pueda tener 
    ese empleado. algo muy importante a tener en cuenta es que las clases al inicio tiene una palabra reservada public, 
    y private que vienen a ser modificadores de acceso; Este public como las variables se le conoce como abstracción; 
    siendo este el primer principio de la piedra angular de la POO*/
    public $nombres;
    public $apellidos;
    public $departamento;
    public $codigo;
}
$Empleado = new Empleado;// Desde el signo igual es la instancia de la clase y $Empleado es el objeto
                         // creado con esa instancia
$Empleado->nombres = "Jorge"; // observése que la sintaxis se le conoce como flecha -> y de esta manera se puede acceder
                                //a una función a los atributos de un objeto.
$Empleado->apellidos = "Mendez"; // Así mismo, con el signo igual (=) se le asigna un valor para este caso Mendez.
$Empleado->departamento = "Ventas";
$Empleado->codigo = "00001";

echo "<pre>"; // esta función echo "<pre>"(Ojo al inicio) y echo "</pre>" (al final) sirve para formatear 
              // los objetos a partir de la clase
var_dump($Empleado);// Var_dump es una función interna de PHP con el objeto $Empleado
echo "</pre>";

/* Ahora en el siguiente bloque vamos a repetir la instancia pero como empleado dos, se debe de tener en cuenta que las
clases no deben de llavar el mismo nombre */
$Empleado2 = new Empleado;// Desde el signo igual es la instancia de la clase y $Empleado es el objeto
                         // creado con esa instancia
$Empleado2->nombres = "Karen"; // observése que la sintaxis se le conoce como flecha -> y de esta manera se puede acceder
                                //a una función a los atributos de un objeto.
$Empleado2->apellidos = "Perez Romualdo"; // Así mismo, con el signo igual (=) se le asigna un valor para este caso Mendez.
$Empleado2->departamento = "Servicios generales";
$Empleado2->codigo = "00002";

echo "<pre>"; // esta función echo "<pre>"(Ojo al inicio) y echo "</pre>" (al final) sirve para formatear 
              // los objetos a partir de la clase
var_dump($Empleado2);// Var_dump es una función interna de PHP con el objeto $Empleado
echo "</pre>";
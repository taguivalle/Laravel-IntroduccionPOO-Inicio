<?php
include 'includes/header.php';
/* Aquí se inicia con los atributos de una clase y los atributos junto a las funciones que va a tener una 
clase son los que conforman parte de la primera piedra angular que se le lla ma como ABSTRACCIÓN; es la
correcta definición de que datos, de que funciones va a tener una clase que estemos creando.*/
class Empleado {
    /* aquí encontramos los atributos public, Es como las variables y se le conoce como abstracción; siendo
    este el primer principio de la piedra angular de la POO*/
    public $nombres;
    public $apellidos;
    public $departamento;
    public $codigo;
}
$Empleado = new Empleado;// Desde el signo igual es la instancia de la clase y $Empleado es el objeto
                         // creado con esa instancia
$Empleado->nombres = "Jorge";
$Empleado->apellidos = "Mendez";
$Empleado->departamento = "Ventas";
$Empleado->codigo = "00001";


echo "<pre>"; // esta función echo "<pre>"(Ojo al inicio) y echo "</pre>" (al final) sirve para formatear 
              // los objetos a partir de la clase
var_dump($Empleado);// Var_dump es una función interna de PHP con el objeto $Empleado
echo "</pre>";
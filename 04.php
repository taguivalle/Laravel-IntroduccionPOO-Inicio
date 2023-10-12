<?php
include 'includes/header.php';
/* Ahora vamos a tocar el tema de que es un constructor para efectos académicos se copiaron y se pegarón las líneas
del archivo 02.php a manera de ejemplo*/
class Empleado {
    /* Nuevamente, aquí vamos crear una clase empleado con unos atributos que pueda tener un empleado, pero con el 
    constructor podemos evitarnos tener que repetir en cada objeto los mismos atributos; con esto en mente podemos crear
    una función que se ejecute automáticamente para simplificar todo esos mismo procedimientos. 
    
    Un constructor viene a ser una función que se ejecuta automáticamente cuando se instancia en una clase; es parte 
    como en php se le conoce como métodos mágicos; seguidamento vamos a ver su sintaxis.*/
    public $nombres;
    public $apellidos;
    public $departamento;
    public $email;
    public $teléfono;

    public function __construct($nombres, $apellidos, $departamento, $email, $teléfono)
    // Lo métodos mágicos inician con guión bajo doble para poder utilizarlo en la clase empleado
    {
        $this->nombres = $nombres;/* con el this se manda a llamar desde el automático cuando es instanciada una clase;
        algo muy importante que este this con esta flecha es que hace referencia a los atributos y además sirve para 
        crear métodos #1 se pueden llamar con ese this.*/
        $this->apellidos = $apellidos;
        $this->departamento = $departamento;
        $this->email = $email;
        $this->teléfono = $teléfono;

    }
}

// Desde el signo igual es la instancia de la clase; y Empleado es el objeto creado con esa instancia
$Tavo = new Empleado('Tavo', 'Valiente', 'Tolima', 'juan@hotmail.com', 001);
$Sami = new Empleado('Sami', 'Ronaldo', 'Tolima', 'sami@hotmail.com', 002);


echo "<pre>"; // esta función echo "<pre>"(Ojo al inicio) y echo "</pre>" (al final) sirve para formatear 
              // los objetos a partir de la clase
var_dump($Tavo);// Var_dump es una función interna de PHP con el objeto $Empleado
echo "</pre><br>";

echo "<pre>"; // esta función echo "<pre>"(Ojo al inicio) y echo "</pre>" (al final) sirve para formatear 
              // los objetos a partir de la clase
var_dump($Sami);// Var_dump es una función interna de PHP con el objeto $Empleado
echo "</pre><br>";
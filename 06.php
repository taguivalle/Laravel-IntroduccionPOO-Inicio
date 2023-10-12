<?php
include 'includes/header.php';
/* Ahora vamos a tocar el tema de que es un Constructor Property Promotion; que para efectos académicos se copiaron y se 
pegarón las líneas del archivo 04.php a manera de ejemplo*/
class Empleado {
    public function __construct(
        public $nombres,
        public $apellidos,
        public $departamento,
        public $email,
        public $teléfono

    )
    {}
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
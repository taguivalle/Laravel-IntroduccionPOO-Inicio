<?php
include 'includes/header.php';
/* En este ejercicio 05.php vamos a tocar el tema de que es un tipado para efectos académicos se copiaron y se pegarón 
las líneas del archivo 04.php a manera de ejemplo*/
class Empleado {
    public $nombres;
    public $apellidos;
    public $departamento;
    public $email;
    public $teléfono;

    /* Observése que los tipos de datos son muy importantes en laravel. Desde esta línea se induce para que se apliquen 
    exactamente los tipos de datos que se piden; para este caso; string e int*/
    public function __construct(string $nombres, string $apellidos, string $departamento, string $email, int $teléfono)
    {
        $this->nombres = $nombres;
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
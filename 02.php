<?php
include 'includes/header.php';
// instanciar una clase: todo esto desde el primer corchete hasta el final del mismo bloque es la clase Empleado
class Empleado { // Se puede tener solamente un solo archivo con el mismo nombre pero sí puede tener muchas intancias
                //con el mismo nombre
    
}
$Empleado = new Empleado;// Desde el signo igual es la instancia de la clase Empleado. que es el objeto creado con 
                            //esa instancia
$Empleado2 = new Empleado;
$Empleado3 = new Empleado;

echo "<pre>"; // esta función echo "<pre>"(Ojo al inicio) y echo "</pre>" (al final) sirve para formatear los 
                //objetos a partir de la clase
var_dump($Empleado);// Var_dump es una función interna de PHP con el objeto $Empleado
echo "</pre>";

echo "<pre>"; // esta función echo "<pre>"(Ojo al inicio) y echo "</pre>" (al final) sirve para formatear los 
                //objetos a partir de la clase
var_dump($Empleado2);// Var_dump es una función interna de PHP con el objeto $Empleado
echo "</pre>";

echo "<pre>"; // esta función echo "<pre>"(Ojo al inicio) y echo "</pre>" (al final) sirve para formatear los 
                //objetos a partir de la clase
var_dump($Empleado3);// Var_dump es una función interna de PHP con el objeto $Empleado
echo "</pre>";
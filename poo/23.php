<?php

require_once("23ClasesyObjectos.php");
//esta es una forma de instanciar un objeto pero no es
//mejor forma se agregarle su valor
print_r("creando un objecto de no muy buena practica <br>");
// $person = new Persona();
// $person->nombre = "Rocky balvoa";
// $person->apellido = "mas cosas";
// $person->edad = 45;

// var_dump($person);

print_r("<br> creando un objecto con una buena practica, siguiendo las nomenclaturas de getter y setter <br>");
//estas son las mejores formas de crear un objecto
//y asignarles su valor jeje
// $persona1 = new Persona();
// $persona1->setNombre("federico perez");
// echo "el nombre de la persona1 es:" .$persona1->getNombre();

echo "<br>";

// $persona2 = new Persona();
// $persona2->setNombre("alejandro diaza");
// print_r($persona2->getNombre());
echo "<br>";

// $persona3 = new Persona();
// $persona3->setNombre("Alejandro123 tabueada");
// print_r("El nombre de la persona 2 es:" .$persona3->getNombre());

//si bien las anteriores estan bien para crear objectos
//y asignarles su valor, tambien lo podemos hacer
//de la siguiente forma. usando el constructor que probablemente sea lo mejor

print_r("<br> creando un objecto apartir del constructor, quizas la mejor practica <br>");

$persona4 = new Persona("federico de jesus", "perez gomez", 23);
$persona4->setNombre("fededjpg");
print_r("el nombre del usuario es:". $persona4->getNombre());






<?php

require_once("23ClasesyObjectos.php");
$person = new Persona();
$person->nombre = "Rocky balvoa"

$persona1 = new Persona();
$persona1->setNombre("federico");
echo $persona1->getNombre();

echo "<br>";

$persona2 = new Persona();
$persona2->setNombre("Alejandro");
print_r($persona2->getNombre());
echo "<br>";
$persona3 = new Persona();
$persona3->setNombre("Alejandrosss");
print_r($persona3->getNombre());
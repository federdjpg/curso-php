<?php
class Persona{
  public $nombre, $apellido, $edad;

  // creando el constructor. un constructor se ejecuta a la hora de instanciar la clase
  // requiriendo asi los parametros que le pasemos

  public function __construct($nombre, $apellido, $edad){
    $this->nombre= strtolower($nombre);
    $this->apellido= strtolower($apellido);
    $this->edad= $edad;
  }

  public function setNombre($nombre){
    $this->nombre= strtolower($nombre);
  }

  public function getNombre(){
  return ucwords($this->nombre);
  }

 }

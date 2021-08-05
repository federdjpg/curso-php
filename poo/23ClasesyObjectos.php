<?php
class Persona{
  public $nombre, $apellido, $edad;

  public function setNombre($nombre){
    $this->nombre=$nombre;
    return $nombre;
  }

  public function getNombre(){
  return $this->nombre;
  }

 }

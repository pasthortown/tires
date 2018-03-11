<?php
class Cargo
{
   public $id;
   public $descripcion;
   public $funciones;

   function __construct($id,$descripcion,$funciones){
      $this->id = $id;
      $this->descripcion = $descripcion;
      $this->funciones = $funciones;
   }
}
?>
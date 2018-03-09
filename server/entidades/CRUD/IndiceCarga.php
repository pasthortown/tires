<?php
class IndiceCarga
{
   public $id;
   public $capacidad;

   function __construct($id,$capacidad){
      $this->id = $id;
      $this->capacidad = $capacidad;
   }
}
?>
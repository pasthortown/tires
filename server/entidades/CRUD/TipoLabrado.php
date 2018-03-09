<?php
class TipoLabrado
{
   public $id;
   public $codigo;
   public $descripcion;

   function __construct($id,$codigo,$descripcion){
      $this->id = $id;
      $this->codigo = $codigo;
      $this->descripcion = $descripcion;
   }
}
?>
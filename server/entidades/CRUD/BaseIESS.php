<?php
class BaseIESS
{
   public $id;
   public $descripcion;
   public $monto;

   function __construct($id,$descripcion,$monto){
      $this->id = $id;
      $this->descripcion = $descripcion;
      $this->monto = $monto;
   }
}
?>
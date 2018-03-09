<?php
class InsumoCompra
{
   public $id;
   public $descripcion;
   public $precio;

   function __construct($id,$descripcion,$precio){
      $this->id = $id;
      $this->descripcion = $descripcion;
      $this->precio = $precio;
   }
}
?>
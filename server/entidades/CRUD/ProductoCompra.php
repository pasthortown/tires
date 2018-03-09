<?php
class ProductoCompra
{
   public $id;
   public $idLlanta;
   public $precio;

   function __construct($id,$idLlanta,$precio){
      $this->id = $id;
      $this->idLlanta = $idLlanta;
      $this->precio = $precio;
   }
}
?>
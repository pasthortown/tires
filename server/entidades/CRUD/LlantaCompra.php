<?php
class LlantaCompra
{
   public $id;
   public $idLlanta;
   public $serie;
   public $precio;

   function __construct($id,$idLlanta,$serie,$precio){
      $this->id = $id;
      $this->idLlanta = $idLlanta;
      $this->serie = $serie;
      $this->precio = $precio;
   }
}
?>
<?php
class IndiceVelocidad
{
   public $id;
   public $codigo;
   public $descripcion;
   public $velocidadMaxima;

   function __construct($id,$codigo,$descripcion,$velocidadMaxima){
      $this->id = $id;
      $this->codigo = $codigo;
      $this->descripcion = $descripcion;
      $this->velocidadMaxima = $velocidadMaxima;
   }
}
?>
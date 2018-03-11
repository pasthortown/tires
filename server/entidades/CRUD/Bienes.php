<?php
class Bienes
{
   public $id;
   public $codigo;
   public $descripcion;
   public $fechaCompra;
   public $precioCompra;
   public $idProveedor;

   function __construct($id,$codigo,$descripcion,$fechaCompra,$precioCompra,$idProveedor){
      $this->id = $id;
      $this->codigo = $codigo;
      $this->descripcion = $descripcion;
      $this->fechaCompra = $fechaCompra;
      $this->precioCompra = $precioCompra;
      $this->idProveedor = $idProveedor;
   }
}
?>
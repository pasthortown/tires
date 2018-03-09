<?php
class ImpuestosProductoCompra
{
   public $id;
   public $idProductoCompra;
   public $nombre;
   public $descripcion;
   public $porcentaje;

   function __construct($id,$idProductoCompra,$nombre,$descripcion,$porcentaje){
      $this->id = $id;
      $this->idProductoCompra = $idProductoCompra;
      $this->nombre = $nombre;
      $this->descripcion = $descripcion;
      $this->porcentaje = $porcentaje;
   }
}
?>
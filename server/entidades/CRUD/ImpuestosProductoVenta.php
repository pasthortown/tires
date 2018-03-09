<?php
class ImpuestosProductoVenta
{
   public $id;
   public $idProductoVenta;
   public $nombre;
   public $descripcion;
   public $porcentaje;

   function __construct($id,$idProductoVenta,$nombre,$descripcion,$porcentaje){
      $this->id = $id;
      $this->idProductoVenta = $idProductoVenta;
      $this->nombre = $nombre;
      $this->descripcion = $descripcion;
      $this->porcentaje = $porcentaje;
   }
}
?>
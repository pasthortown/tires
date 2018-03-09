<?php
class ImpuestosInsumoVenta
{
   public $id;
   public $idInsumoVenta;
   public $nombre;
   public $descripcion;
   public $porcentaje;

   function __construct($id,$idInsumoVenta,$nombre,$descripcion,$porcentaje){
      $this->id = $id;
      $this->idInsumoVenta = $idInsumoVenta;
      $this->nombre = $nombre;
      $this->descripcion = $descripcion;
      $this->porcentaje = $porcentaje;
   }
}
?>
<?php
class ImpuestosServicioVenta
{
   public $id;
   public $idServicioVenta;
   public $nombre;
   public $descripcion;
   public $porcentaje;

   function __construct($id,$idServicioVenta,$nombre,$descripcion,$porcentaje){
      $this->id = $id;
      $this->idServicioVenta = $idServicioVenta;
      $this->nombre = $nombre;
      $this->descripcion = $descripcion;
      $this->porcentaje = $porcentaje;
   }
}
?>
<?php
class ImpuestosServicioCompra
{
   public $id;
   public $idServicioCompra;
   public $nombre;
   public $descripcion;
   public $porcentaje;

   function __construct($id,$idServicioCompra,$nombre,$descripcion,$porcentaje){
      $this->id = $id;
      $this->idServicioCompra = $idServicioCompra;
      $this->nombre = $nombre;
      $this->descripcion = $descripcion;
      $this->porcentaje = $porcentaje;
   }
}
?>
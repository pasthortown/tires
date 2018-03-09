<?php
class ImpuestosInsumoCompra
{
   public $id;
   public $idInsumoCompra;
   public $nombre;
   public $descripcion;
   public $porcentaje;

   function __construct($id,$idInsumoCompra,$nombre,$descripcion,$porcentaje){
      $this->id = $id;
      $this->idInsumoCompra = $idInsumoCompra;
      $this->nombre = $nombre;
      $this->descripcion = $descripcion;
      $this->porcentaje = $porcentaje;
   }
}
?>
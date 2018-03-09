<?php
class CabeceraFacturaCompra
{
   public $id;
   public $idProveedor;
   public $fechaFactura;
   public $numeroFactura;

   function __construct($id,$idProveedor,$fechaFactura,$numeroFactura){
      $this->id = $id;
      $this->idProveedor = $idProveedor;
      $this->fechaFactura = $fechaFactura;
      $this->numeroFactura = $numeroFactura;
   }
}
?>
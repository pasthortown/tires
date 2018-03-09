<?php
class CabeceraFacturaVenta
{
   public $id;
   public $idCliente;
   public $idVehiculo;
   public $kilometraje;
   public $fechaFactura;
   public $numeroFactura;
   public $observaciones;
   public $idVendedor;
   public $idSucursal;

   function __construct($id,$idCliente,$idVehiculo,$kilometraje,$fechaFactura,$numeroFactura,$observaciones,$idVendedor,$idSucursal){
      $this->id = $id;
      $this->idCliente = $idCliente;
      $this->idVehiculo = $idVehiculo;
      $this->kilometraje = $kilometraje;
      $this->fechaFactura = $fechaFactura;
      $this->numeroFactura = $numeroFactura;
      $this->observaciones = $observaciones;
      $this->idVendedor = $idVendedor;
      $this->idSucursal = $idSucursal;
   }
}
?>